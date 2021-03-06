<?php
/**
 * Automatically generated by running "php schema.php splfile".
 *
 * You may modify the file, but re-running schema.php against this file will
 * standardize the format without losing your schema changes. It does lose
 * any changes that are not part of schema. Use "note" field to comment on
 * schema itself, and "note" fields are not used in any code generation but
 * only staying within this file.
 */
///////////////////////////////////////////////////////////////////////////////
// Preamble: C++ code inserted at beginning of ext_{name}.h

DefinePreamble(<<<CPP

CPP
);

///////////////////////////////////////////////////////////////////////////////
// Constants
//
// array (
//   'name' => name of the constant
//   'type' => type of the constant
//   'note' => additional note about this constant's schema
// )


///////////////////////////////////////////////////////////////////////////////
// Functions
//
// array (
//   'name'   => name of the function
//   'desc'   => description of the function's purpose
//   'flags'  => attributes of the function, see base.php for possible values
//   'opt'    => optimization callback function's name for compiler
//   'note'   => additional note about this function's schema
//   'return' =>
//      array (
//        'type'  => return type, use Reference for ref return
//        'desc'  => description of the return value
//      )
//   'args'   => arguments
//      array (
//        'name'  => name of the argument
//        'type'  => type of the argument, use Reference for output parameter
//        'value' => default value of the argument
//        'desc'  => description of the argument
//      )
// )

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo___construct",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Resource,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "file_name",
        'type'   => String,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getatime",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getbasename",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "suffix",
        'type'   => String,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getctime",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getfileinfo",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Resource,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "class_name",
        'type'   => String,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getfilename",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getgroup",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getinode",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getlinktarget",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getmtime",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getowner",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getpath",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getpathinfo",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Resource,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "class_name",
        'type'   => String,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getpathname",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getperms",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getrealpath",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_getsize",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_gettype",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_isdir",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_isexecutable",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_isfile",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_islink",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_isreadable",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_iswritable",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_openfile",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Resource,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "open_mode",
        'type'   => String,
      ),
      array(
        'name'   => "use_include_path",
        'type'   => Boolean,
      ),
      array(
        'name'   => "context",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_setfileclass",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "class_name",
        'type'   => String,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo_setinfoclass",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "class_name",
        'type'   => String,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileinfo___tostring",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject___construct",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Resource,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "filename",
        'type'   => String,
      ),
      array(
        'name'   => "open_mode",
        'type'   => String,
      ),
      array(
        'name'   => "use_include_path",
        'type'   => Boolean,
      ),
      array(
        'name'   => "context",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_current",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_eof",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_fflush",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_fgetc",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_fgetcsv",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "delimiter",
        'type'   => String,
      ),
      array(
        'name'   => "enclosure",
        'type'   => String,
      ),
      array(
        'name'   => "escape",
        'type'   => String,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_fgets",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_fgetss",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => String,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "allowable_tags",
        'type'   => String,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_flock",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "wouldblock",
        'type'   => Variant | Reference,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_fpassthru",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_fscanf",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "_argc",
        'type'   => Int64,
      ),
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "format",
        'type'   => String,
      ),
      array(
        'name'   => "_argv",
        'type'   => Variant,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_fseek",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "offset",
        'type'   => Int64,
      ),
      array(
        'name'   => "whence",
        'type'   => Int64,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_fstat",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_ftell",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_ftruncate",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "size",
        'type'   => Int64,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_fwrite",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "str",
        'type'   => String,
      ),
      array(
        'name'   => "length",
        'type'   => Int64,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_getcvscontrol",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Variant,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_getflags",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_getmaxlinelen",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_key",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Int64,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_next",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_rewind",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_valid",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => Boolean,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_seek",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "line_pos",
        'type'   => Int64,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_setcsvcontrol",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "delimiter",
        'type'   => String,
      ),
      array(
        'name'   => "enclosure",
        'type'   => String,
      ),
      array(
        'name'   => "escape",
        'type'   => String,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_setflags",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "flags",
        'type'   => Int64,
      ),
    ),
  ));

DefineFunction(
  array(
    'name'   => "hphp_splfileobject_setmaxlinelen",
    'flags'  =>  HipHopSpecific,
    'return' => array(
      'type'   => null,
    ),
    'args'   => array(
      array(
        'name'   => "obj",
        'type'   => Resource,
      ),
      array(
        'name'   => "max_len",
        'type'   => Int64,
      ),
    ),
  ));


///////////////////////////////////////////////////////////////////////////////
// Classes
//
// BeginClass
// array (
//   'name'   => name of the class
//   'desc'   => description of the class's purpose
//   'flags'  => attributes of the class, see base.php for possible values
//   'note'   => additional note about this class's schema
//   'parent' => parent class name, if any
//   'ifaces' => array of interfaces tihs class implements
//   'bases'  => extra internal and special base classes this class requires
//   'footer' => extra C++ inserted at end of class declaration
// )
//
// DefineConstant(..)
// DefineConstant(..)
// ...
// DefineFunction(..)
// DefineFunction(..)
// ...
// DefineProperty
// DefineProperty
//
// array (
//   'name'  => name of the property
//   'type'  => type of the property
//   'flags' => attributes of the property
//   'desc'  => description of the property
//   'note'  => additional note about this property's schema
// )
//
// EndClass()

