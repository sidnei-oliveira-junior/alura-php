#include "../../common.h"

#include "php_collection_ce.h"
#include "php_sequence_ce.h"

zend_class_entry *sequence_ce;

#define SEQUENCE_ABSTRACT_ME(name) PHP_ABSTRACT_ME(Sequence, name, arginfo_Sequence_##name)

void php_ds_register_sequence()
{
    zend_class_entry ce;

    zend_function_entry methods[] = {
        SEQUENCE_ABSTRACT_ME(allocate)
        SEQUENCE_ABSTRACT_ME(capacity)
        SEQUENCE_ABSTRACT_ME(contains)
        SEQUENCE_ABSTRACT_ME(filter)
        SEQUENCE_ABSTRACT_ME(find)
        SEQUENCE_ABSTRACT_ME(first)
        SEQUENCE_ABSTRACT_ME(get)
        SEQUENCE_ABSTRACT_ME(insert)
        SEQUENCE_ABSTRACT_ME(join)
        SEQUENCE_ABSTRACT_ME(last)
        SEQUENCE_ABSTRACT_ME(map)
        SEQUENCE_ABSTRACT_ME(merge)
        SEQUENCE_ABSTRACT_ME(pop)
        SEQUENCE_ABSTRACT_ME(push)
        SEQUENCE_ABSTRACT_ME(reduce)
        SEQUENCE_ABSTRACT_ME(remove)
        SEQUENCE_ABSTRACT_ME(reverse)
        SEQUENCE_ABSTRACT_ME(rotate)
        SEQUENCE_ABSTRACT_ME(set)
        SEQUENCE_ABSTRACT_ME(shift)
        SEQUENCE_ABSTRACT_ME(slice)
        SEQUENCE_ABSTRACT_ME(sort)
        SEQUENCE_ABSTRACT_ME(unshift)
        PHP_FE_END
    };

    INIT_CLASS_ENTRY(ce, PHP_DS_NS(Sequence), methods);
   
    sequence_ce = zend_register_internal_interface(&ce);
   
    zend_class_implements(sequence_ce, 2, 
        collection_ce,
        zend_ce_arrayaccess
    );
}
