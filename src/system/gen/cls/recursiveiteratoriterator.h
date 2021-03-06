/*
   +----------------------------------------------------------------------+
   | HipHop for PHP                                                       |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010 Facebook, Inc. (http://www.facebook.com)          |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
*/
// @generated by HipHop Compiler

#ifndef __GENERATED_cls_recursiveiteratoriterator_h__
#define __GENERATED_cls_recursiveiteratoriterator_h__

#include <cls/outeriterator.h>
#include <cls/traversable.h>

namespace HPHP {
///////////////////////////////////////////////////////////////////////////////

/* SRC: classes/iterator.php line 28 */
class c_recursiveiteratoriterator : public ExtObjectData {
  BEGIN_CLASS_MAP(RecursiveIteratorIterator)
    PARENT_CLASS(Iterator)
    PARENT_CLASS(OuterIterator)
    PARENT_CLASS(Traversable)
  END_CLASS_MAP(RecursiveIteratorIterator)
  DECLARE_CLASS_COMMON(recursiveiteratoriterator, RecursiveIteratorIterator)
  DECLARE_INVOKE_EX(recursiveiteratoriterator, RecursiveIteratorIterator, ObjectData)

  // DECLARE_STATIC_PROP_OPS
  public:
#define OMIT_JUMP_TABLE_CLASS_STATIC_GETINIT_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_STATIC_GET_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_STATIC_LVAL_recursiveiteratoriterator 1
  static Variant os_constant(const char *s);

  // DECLARE_INSTANCE_PROP_OPS
  public:
#define OMIT_JUMP_TABLE_CLASS_GETARRAY_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_SETARRAY_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_exists_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_exists_PRIVATE_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_get_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_get_PRIVATE_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_set_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_set_PRIVATE_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_lval_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_lval_PRIVATE_recursiveiteratoriterator 1

  // DECLARE_INSTANCE_PUBLIC_PROP_OPS
  public:
#define OMIT_JUMP_TABLE_CLASS_exists_PUBLIC_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_get_PUBLIC_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_set_PUBLIC_recursiveiteratoriterator 1
#define OMIT_JUMP_TABLE_CLASS_lval_PUBLIC_recursiveiteratoriterator 1

  // DECLARE_COMMON_INVOKE
#define OMIT_JUMP_TABLE_CLASS_STATIC_INVOKE_recursiveiteratoriterator 1
  virtual Variant o_invoke(MethodIndex methodIndex, const char *s,CArrRef ps, int64 h,
                           bool f = true);
  virtual Variant o_invoke_few_args(MethodIndex methodIndex, const char *s, int64 h,
                                    int count,
                                    INVOKE_FEW_ARGS_DECL_ARGS);

  public:
  DECLARE_INVOKES_FROM_EVAL
  void init();
  public: void t___construct(Variant v_iterator, Variant v_mode = 0LL /* recursiveiteratoriterator::LEAVES_ONLY */, Variant v_flags = 0LL);
  public: c_recursiveiteratoriterator *create(Variant v_iterator, Variant v_mode = 0LL /* recursiveiteratoriterator::LEAVES_ONLY */, Variant v_flags = 0LL);
  public: ObjectData *dynCreate(CArrRef params, bool init = true);
  public: void dynConstruct(CArrRef params);
  public: void dynConstructFromEval(Eval::VariableEnvironment &env, const Eval::FunctionCallExpression *call);
  public: Object t_getinneriterator();
  public: Variant t_current();
  public: Variant t_key();
  public: Variant t_next();
  public: Variant t_rewind();
  public: bool t_valid();
  public: Variant m_rsrc;
};
extern struct ObjectStaticCallbacks cw_recursiveiteratoriterator;

///////////////////////////////////////////////////////////////////////////////
}

#endif // __GENERATED_cls_recursiveiteratoriterator_h__
