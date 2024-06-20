PHP_ARG_ENABLE(ds, whether to enable ds support,
[  --enable-ds           Enable ds support])

if test "$PHP_DS" != "no"; then
  PHP_NEW_EXTENSION(ds,                       \
                                              \
  src/common.c                                \
                                              \
dnl Internal
  src/ds/ds_vector.c                   \
  src/ds/ds_deque.c                    \
  src/ds/ds_htable.c                   \
  src/ds/ds_set.c                      \
  src/ds/ds_map.c                      \
  src/ds/ds_stack.c                    \
  src/ds/ds_priority_queue.c           \
  src/ds/ds_queue.c                    \
                                                  \
  src/php/objects/php_vector.c                    \
  src/php/objects/php_deque.c                     \
  src/php/objects/php_map.c                       \
  src/php/objects/php_pair.c                      \
  src/php/objects/php_priority_queue.c            \
  src/php/objects/php_queue.c                     \
  src/php/objects/php_set.c                       \
  src/php/objects/php_stack.c                     \
                                                  \
dnl Iterators
  src/php/iterators/php_vector_iterator.c         \
  src/php/iterators/php_deque_iterator.c          \
  src/php/iterators/php_set_iterator.c            \
  src/php/iterators/php_map_iterator.c            \
  src/php/iterators/php_stack_iterator.c          \
  src/php/iterators/php_htable_iterator.c         \
  src/php/iterators/php_priority_queue_iterator.c \
  src/php/iterators/php_queue_iterator.c          \
                                                  \
dnl Handlers
  src/php/handlers/php_common_handlers.c          \
  src/php/handlers/php_vector_handlers.c          \
  src/php/handlers/php_deque_handlers.c           \
  src/php/handlers/php_set_handlers.c             \
  src/php/handlers/php_map_handlers.c             \
  src/php/handlers/php_stack_handlers.c           \
  src/php/handlers/php_pair_handlers.c            \
  src/php/handlers/php_priority_queue_handlers.c  \
  src/php/handlers/php_queue_handlers.c           \
                                                  \
dnl Interfaces
  src/php/classes/php_hashable_ce.c               \
  src/php/classes/php_collection_ce.c             \
  src/php/classes/php_sequence_ce.c               \
                                                  \
dnl Classes
  src/php/classes/php_vector_ce.c                 \
  src/php/classes/php_deque_ce.c                  \
  src/php/classes/php_set_ce.c                    \
  src/php/classes/php_map_ce.c                    \
  src/php/classes/php_stack_ce.c                  \
  src/php/classes/php_pair_ce.c                   \
  src/php/classes/php_priority_queue_ce.c         \
  src/php/classes/php_queue_ce.c                  \
                                                  \
  php_ds.c                                        \
                                                  \
  , $ext_shared, -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1)

  PHP_ADD_BUILD_DIR($ext_builddir/src, 1)
  PHP_ADD_BUILD_DIR($ext_builddir/src/ds, 1)
  PHP_ADD_BUILD_DIR($ext_builddir/src/php, 1)
  PHP_ADD_BUILD_DIR($ext_builddir/src/php/objects, 1)
  PHP_ADD_BUILD_DIR($ext_builddir/src/php/classes, 1)
  PHP_ADD_BUILD_DIR($ext_builddir/src/php/iterators, 1)
  PHP_ADD_BUILD_DIR($ext_builddir/src/php/handlers, 1)

  PHP_ADD_EXTENSION_DEP(ds, spl)
  PHP_ADD_EXTENSION_DEP(ds, json)
fi


