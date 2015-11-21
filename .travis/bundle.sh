#!/usr/bin/env bash
############################################################################
#                                                                          #
# This script is used by Travis CI to create a downloadable build for each #
# release with all dependencies, for manual installation.                  #
#                                                                          #
############################################################################

set -e
set -x

# check if this is a travis environment
if [ ! -z $TRAVIS_BUILD_DIR ] ; then
  WORKSPACE=$TRAVIS_BUILD_DIR
fi
if [ -z $WORKSPACE ] ; then
  echo "No workspace configured, please set your WORKSPACE environment"
  exit
fi

BUILDENV=`mktemp -d /tmp/${APPNAME}-release-${TRAVIS_TAG}`
echo "Using build directory ${BUILDENV}"

cd $WORKSPACE
rsync -av \
  --exclude='.travis/' \
  --exclude='.scrutinizer.yml' \
  --exclude='.travis.yml' \
  --exclude='.codeclimate.yml' \
  --exclude='.git/' \
  --exclude='.gitignore' \
  . ${BUILDENV}/
zip -r ${APPNAME}.zip ${BUILDENV}
tar -czf ${APPNAME}.tar.gz ${BUILDENV}
printf "\x1b[32mBundled release ${TRAVIS_TAG}\x1b[0m"