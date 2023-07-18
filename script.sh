#!/bin/bash

# Fonction pour cloner la branche source vers la branche cible
clone_branch() {
  source_branch=$1
  target_branch=$2

  git checkout $source_branch
  git pull origin $source_branch
  git checkout -b $target_branch
  git push origin $target_branch
}

# Cloner et monter depuis develop vers preprod
clone_branch develop preprod

# Cloner et monter depuis preprod vers master
clone_branch preprod master
