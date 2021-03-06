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

#ifndef __HPHP_DEBUGGER_THRIFT_BUFFER_H__
#define __HPHP_DEBUGGER_THRIFT_BUFFER_H__

#include <runtime/base/util/thrift_buffer.h>
#include <runtime/base/file/socket.h>

namespace HPHP {
///////////////////////////////////////////////////////////////////////////////

/**
 * Wire format and buffer for socket communication between DebuggerClient and
 * DebuggerProxy.
 */
class DebuggerThriftBuffer: public ThriftBuffer {
public:
  static const int BUFFER_SIZE = 1024;

public:
  DebuggerThriftBuffer() : ThriftBuffer(BUFFER_SIZE) {}

  SmartPtr<Socket> getSocket() { return m_socket;}

  void create(SmartPtr<Socket> socket) {
    m_socket = socket;
  }
  void close() {
    m_socket->close();
  }

protected:
  virtual String readImpl();
  virtual void flushImpl(CStrRef data);

private:
  char m_buffer[BUFFER_SIZE + 1];
  SmartPtr<Socket> m_socket;
};

///////////////////////////////////////////////////////////////////////////////
}

#endif // __HPHP_DEBUGGER_THRIFT_BUFFER_H__
