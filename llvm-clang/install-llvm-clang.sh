#!/bin/bash
VERSION=35

svn co http://llvm.org/svn/llvm-project/llvm/branches/release_$VERSION llvm$VERSION

cd llvm$VERSION/tools

svn co http://llvm.org/svn/llvm-project/cfe/branches/release_$VERSION clang

cd ../..

cd llvm$VERSION/tools/clang/tools

svn co http://llvm.org/svn/llvm-project/clang-tools-extra/branches/release_$VERSION extra

cd ../../../..

cd llvm$VERSION/projects

svn co http://llvm.org/svn/llvm-project/compiler-rt/branches/release_$VERSION compiler-rt

cd ../..

cd llvm$VERSION

mkdir build

cd build

../configure --enable-optimized

make

sudo make install
