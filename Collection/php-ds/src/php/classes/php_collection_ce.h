#ifndef DS_COLLECTION_CE_H
#define DS_COLLECTION_CE_H

#include "../../common.h"
#include "../arginfo.h"

extern zend_class_entry *collection_ce;

#define PHP_DS_COLLECTION_ME(cls, name) \
    PHP_ME(cls, name, arginfo_Collection_##name, ZEND_ACC_PUBLIC)

#define PHP_DS_COLLECTION_ME_LIST(cls) \
PHP_DS_COLLECTION_ME(cls, clear) \
PHP_DS_COLLECTION_ME(cls, copy) \
PHP_DS_COLLECTION_ME(cls, count) \
PHP_DS_COLLECTION_ME(cls, isEmpty) \
PHP_DS_COLLECTION_ME(cls, jsonSerialize) \
PHP_DS_COLLECTION_ME(cls, toArray)

ARGINFO_NONE_RETURN_DS(     Collection_copy, Collection);
ARGINFO_NONE(               Collection_clear);
ARGINFO_NONE_RETURN_LONG(   Collection_count);
ARGINFO_NONE_RETURN_BOOL(   Collection_isEmpty);
ARGINFO_NONE_RETURN_TYPE(   Collection_jsonSerialize, IS_MIXED);
ARGINFO_NONE_RETURN_ARRAY(  Collection_toArray);

void php_ds_register_collection();

#endif
