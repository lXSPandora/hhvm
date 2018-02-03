<?hh // strict
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

namespace NS;

function returns_dict(): dict<string, int> {
  return dict(['a' => 123, 'b' => 456, 'c' => 789]);
}

function returns_keyset(): keyset<string> {
  return keyset(['a', 'b', 'c']);
}

function returns_vec(): vec<string> {
  return vec(['a', 'b', 'c']);
}
