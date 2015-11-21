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

RELEASEDIR=`mktemp -d /tmp/${APPNAME}-release.XXXXXXXX`
echo "Using release directory ${RELEASEDIR}"
cd $WORKSPACE
rsync -av \
  --exclude='.travis/' \
  --exclude='.scrutinizer.yml' \
  --exclude='.travis.yml' \
  --exclude='.codeclimate.yml' \
  --exclude='.git/' \
  --exclude='.gitignore' \
  --exclude='Berksfile' \
  --exclude='Vagrantfile' \
  . ${RELEASEDIR}/
zip -r ${APPNAME}-${TRAVIS_TAG}.zip ${RELEASEDIR}
tar -czf ${APPNAME}-${TRAVIS_TAG}.tar.gz ${RELEASEDIR}
printf "\x1b[32mBundled release XXX\x1b[0m"