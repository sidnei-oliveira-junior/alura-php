// #include "../iterators/php_deque_iterator.h"
#include "../handlers/php_deque_handlers.h"
#include "../classes/php_deque_ce.h"

#include "php_deque.h"

zend_object *php_ds_deque_create_object_ex(ds_deque_t *deque)
{
#if PHP_VERSION_ID < 70300
	php_ds_deque_t *obj = ecalloc(1, sizeof(php_ds_deque_t) + zend_object_properties_size(php_ds_deque_ce));
#else
    php_ds_deque_t *obj = zend_object_alloc(sizeof(php_ds_deque_t), php_ds_deque_ce);
#endif
    zend_object_std_init(&obj->std, php_ds_deque_ce);
    obj->std.handlers = &php_deque_handlers;
    obj->deque = deque;
    return &obj->std;
}

zend_object *php_ds_deque_create_object(zend_class_entry *ce)
{
    return php_ds_deque_create_object_ex(ds_deque());
}

zend_object *php_ds_deque_create_clone(ds_deque_t *deque)
{
    return php_ds_deque_create_object_ex(ds_deque_clone(deque));
}

int php_ds_deque_serialize(zval *object, unsigned char **buffer, size_t *length, zend_serialize_data *data)
{
    ds_deque_t *deque = Z_DS_DEQUE_P(object);

    php_serialize_data_t serialize_data = (php_serialize_data_t) data;
    PHP_VAR_SERIALIZE_INIT(serialize_data);

    if (deque->size == 0) {
        SERIALIZE_SET_ZSTR(ZSTR_EMPTY_ALLOC());

    } else {

        zval *value;
        smart_str buf = {0};

        DS_DEQUE_FOREACH(deque, value) {
            php_var_serialize(&buf, value, &serialize_data);
        }
        DS_DEQUE_FOREACH_END();

        smart_str_0(&buf);
        SERIALIZE_SET_ZSTR(buf.s);
        zend_string_release(buf.s);
    }

    PHP_VAR_SERIALIZE_DESTROY(serialize_data);
    return SUCCESS;
}

int php_ds_deque_unserialize(zval *object, zend_class_entry *ce, const unsigned char *buffer, size_t length, zend_unserialize_data *data)
{
    ds_deque_t *deque = ds_deque();

    php_unserialize_data_t unserialize_data = (php_unserialize_data_t) data;

    const unsigned char *pos = buffer;
    const unsigned char *end = buffer + length;

    PHP_VAR_UNSERIALIZE_INIT(unserialize_data);

    while (pos != end) {
        zval *value = var_tmp_var(&unserialize_data);

        if ( ! php_var_unserialize(value, &pos, end, &unserialize_data)) {
            goto error;
        }

        ds_deque_push(deque, value);
    }

    ZVAL_DS_DEQUE(object, deque);
    PHP_VAR_UNSERIALIZE_DESTROY(unserialize_data);
    return SUCCESS;

error:
    ds_deque_free(deque);
    PHP_VAR_UNSERIALIZE_DESTROY(unserialize_data);
    UNSERIALIZE_ERROR();
    return FAILURE;
}
