<?php
//Copyright (c) 2016 iFeiwu.com
 class Ifeiwu { protected $db; protected $table; protected $fields; protected $order; protected $admin; public function __construct() { goto neD8h; WMrOh: if (!in_array("\163\157\x72\x74\142\x79", $this->fields)) { goto kyFRb; } goto Q4L9D; xg5OF: $this->prefix = $this->db->getPrefix(); goto SdGqI; SdGqI: $this->fields = $this->_getTableFields($this->table); goto LDlt5; LDlt5: $this->order = array(); goto WMrOh; Q4L9D: $this->order[] = "\x73\x6f\162\164\142\x79\x20\104\105\x53\103"; goto VVClJ; mwBeI: $this->db = ifeiwu\Db::getInstance(); goto xg5OF; nGOBy: if (!$this->table) { goto wVXv0; } goto mwBeI; kWieO: ZbeKP: goto jSh_u; neD8h: $this->admin = $_GET["\141\x64\155\151\x6e"]; goto nGOBy; Edbtg: if (!in_array("\143\x74\151\155\x65", $this->fields)) { goto ZbeKP; } goto rfCbq; jSh_u: wVXv0: goto ZA5tg; rfCbq: $this->order[] = "\143\164\151\155\x65\40\104\x45\x53\103"; goto kWieO; VVClJ: kyFRb: goto Edbtg; ZA5tg: } public function __destruct() { goto IGN2l; IGN2l: if (!APP_DEBUG) { goto CRWE2; } goto sX6M1; sX6M1: $this->_debug($this->db->log()); goto oeD8k; oeD8k: CRWE2: goto ktqyk; ktqyk: } protected function error($message = '', $data = null) { return $this->_result(1, $message, $data); } protected function success($message = '', $data = null) { return $this->_result(0, $message, $data); } protected function _result($code = 0, $message = '', $data = null) { goto iopkN; BAUmZ: $res["\144\141\x74\x61"] = $data; goto QrtFO; figoN: return $res; goto Sv0SZ; UMEND: if (!$data) { goto yTioE; } goto BAUmZ; iopkN: $res = array(); goto wGn3k; YJrsi: F2cku: goto UMEND; QrtFO: yTioE: goto figoN; o7MEW: $res["\155\145\163\163\141\x67\x65"] = $message; goto mLMNw; Nt3gE: if (is_array($message)) { goto UL5l6; } goto o7MEW; I37Oq: $res["\144\x61\x74\x61"] = $message; goto YJrsi; GUR6S: UL5l6: goto I37Oq; wGn3k: $res["\x63\x6f\144\x65"] = $code; goto Nt3gE; mLMNw: goto F2cku; goto GUR6S; Sv0SZ: } protected function _bulidData($request_data) { goto JTtaM; le42g: E3ZSm: goto zLnT0; DqX3s: if (!isset($request_data["\143\164\151\x6d\145"])) { goto B94LS; } goto odd4v; VhsmZ: e8i1n: goto SUNbd; hV9TH: pCb94: goto FREqu; WIXdz: $column = array("\151\x64"); goto fUaVk; SUNbd: return $data; goto lVPG6; Miv0E: $pid = $data["\160\x69\x64"]; goto YJbuk; gp1um: B94LS: goto Miv0E; uP1ii: $data["\x73\164\x61\x74\145"] = isset($data["\163\164\141\x74\145"]) ? $data["\x73\x74\x61\x74\145"] : 0; goto DqX3s; O1nD0: $column[] = "\x74\x69\x74\x6c\145"; goto le42g; zLnT0: if (!in_array("\x61\154\151\x61\163", $this->fields)) { goto pCb94; } goto HJHEx; JTtaM: $data = array(); goto XbZz_; fUaVk: if (!in_array("\x74\151\x74\x6c\x65", $this->fields)) { goto E3ZSm; } goto O1nD0; YJbuk: if (!($pid > 0 && in_array("\x6a\x73\x6f\156", $this->fields))) { goto e8i1n; } goto WIXdz; odd4v: $data["\143\x74\x69\x6d\145"] = strtotime($request_data["\x63\164\x69\x6d\x65"]); goto gp1um; yTsFG: xhsxx: goto uP1ii; FREqu: $category = $this->db->select($this->table, $column)->where("\151\x64\x20\75\x20{$pid}")->get(); goto ZgNh3; XbZz_: foreach ($this->fields as $field) { goto t4qVQ; t4qVQ: $value = $request_data[$field]; goto MVbSY; sywD3: i6b1q: goto vZ89v; IFeYA: ucA_7: goto sywD3; MVbSY: if (!($value !== null)) { goto ucA_7; } goto vS0So; vS0So: $data[$field] = is_array($value) ? json_encode($value) : $this->_encode($value); goto IFeYA; vZ89v: } goto yTsFG; HJHEx: $column[] = "\141\x6c\x69\141\x73"; goto hV9TH; ZgNh3: $data["\152\x73\x6f\156"] = $category ? json_encode(array("\x63" => $category)) : ''; goto VhsmZ; lVPG6: } protected function _encode($data) { goto L3CVx; L3CVx: if (!is_array($data)) { goto JAZqH; } goto JPBqK; S2pM1: $tmp = clone $data; goto n266T; dFEyH: K45Zp: goto lDWkq; YEj96: JAZqH: goto vUtrI; R0m5J: return htmlspecialchars($data, ENT_QUOTES); goto w5XJO; n266T: foreach ($data as $k => $v) { $tmp->{$k} = $this->_encode($v); L4YNo: } goto dFEyH; JPBqK: return array_map(array($this, "\137\x65\x6e\143\157\x64\x65"), $data); goto YEj96; vUtrI: if (!is_object($data)) { goto Tmq5C; } goto S2pM1; ToVBw: Tmq5C: goto R0m5J; lDWkq: return $tmp; goto ToVBw; w5XJO: } protected function _decode($data) { goto JNOj9; CRtr9: foreach ($data as $k => $v) { $tmp->{$k} = $this->_decode($v); UPUiv: } goto EQpk6; rIg8g: $tmp = clone $data; goto CRtr9; yHHpO: tEz50: goto Ldjv1; JNOj9: if (!is_array($data)) { goto tEz50; } goto lE9w_; aLyor: return htmlspecialchars_decode($data, ENT_QUOTES); goto rD1km; lE9w_: return array_map(array($this, "\x5f\144\145\143\157\144\x65"), $data); goto yHHpO; EROGF: return $tmp; goto bZCpK; EQpk6: qq7PS: goto EROGF; bZCpK: OpSRk: goto aLyor; Ldjv1: if (!is_object($data)) { goto OpSRk; } goto rIg8g; rD1km: } protected function _getTableFields($table) { goto SaCUn; Ztbd3: $i++; goto lyQwu; jmeEB: LWmSJ: goto Ztbd3; SaCUn: if ($table) { goto Zesof; } goto BOZyQ; YgGha: $table = $this->prefix . $table; goto ZSRVR; ZSRVR: mOLv6: goto vD5PS; T0vzT: Zesof: goto YgGha; H4EV0: return $fields; goto QvXO2; s4f8F: $column = $query->getColumnMeta($i); goto T3fNb; VtuBX: goto mOLv6; goto T0vzT; lyQwu: goto ml51y; goto MKHXt; MKHXt: SCVOl: goto H4EV0; Z13_E: $count = $query->columnCount(); goto zrWuu; Yly5i: if (!($i < $count)) { goto SCVOl; } goto s4f8F; T3fNb: $fields[] = $column["\x6e\x61\x6d\x65"]; goto jmeEB; vD5PS: $query = $this->db->query("\123\x45\x4c\105\103\124\x20\x2a\x20\x46\122\117\115\40{$table}"); goto Z13_E; EDUww: ml51y: goto Yly5i; zrWuu: $i = 0; goto EDUww; BOZyQ: $table = $this->prefix . $this->table; goto VtuBX; QvXO2: } protected function _callback($method, $params) { goto QWZss; p3LjW: TapfF: goto ERjlJ; dgg0t: call_user_func_array(array($this, $method), $params); goto p3LjW; QWZss: if (!(is_callable(array($this, $method)) !== false)) { goto TapfF; } goto dgg0t; ERjlJ: } protected function _getLevel($pid, $id) { goto H7phW; MslnQ: $pid = $this->db->select($this->table, "\x70\x69\x64")->where(array("\x69\x64", "\75", $id))->get(0); goto In1kz; fcA6p: if (!($pid != 0)) { goto KmOsj; } goto b5AdB; AeRov: return "\x2c" . implode("\x2c", array_reverse($list)) . "\54"; goto CTQnC; H7phW: static $list = array(); goto cFHg9; X95xu: goto p8U4I; goto E6xsM; CTQnC: goto O8q6f; goto dndlj; cFHg9: if (!($pid === '')) { goto C6cOJ; } goto MslnQ; xDU29: if ($id) { goto KOMwA; } goto AeRov; AVjXx: return "\x2c" . implode("\x2c", array_reverse($list)) . "\54" . $id . "\54"; goto lxTUL; b5AdB: $list[] = $pid; goto jKHSx; dndlj: KOMwA: goto AVjXx; jKHSx: $this->_getLevel('', $pid); goto FzHXj; In1kz: C6cOJ: goto fcA6p; FIQWL: if (count($list) == 0) { goto WqQgR; } goto xDU29; FzHXj: KmOsj: goto FIQWL; lxTUL: O8q6f: goto X95xu; il2rV: return "\x2c" . $id . "\x2c"; goto edCqa; edCqa: p8U4I: goto iLGOa; E6xsM: WqQgR: goto il2rV; iLGOa: } protected function _saveData($table, $data, $where) { goto pc_MN; P0AV5: kPd8p: goto QJ8tC; YjHvN: return $this->db->update($table, $data, $where)->is(); goto P0AV5; Af9hl: qwy1V: goto YjHvN; fZ5jR: return $this->db->insert($table, $data)->is(); goto IA27I; IA27I: goto kPd8p; goto Af9hl; pc_MN: if ($this->db->select($table)->where($where)->has()) { goto qwy1V; } goto fZ5jR; QJ8tC: } protected function _saveImages($pid, $request_data) { goto xIzr3; JUg1L: $images_title = $request_data["\x69\155\x61\147\145\x73\137\164\151\164\x6c\145"]; goto yXexS; VKOgx: $images_order = $request_data["\151\x6d\x61\147\145\163\137\x6f\x72\144\x65\x72"]; goto JUg1L; yXexS: $images_name = $request_data["\151\155\141\x67\x65\163\137\x6e\141\155\x65"]; goto vfPKN; xIzr3: $images_id = $request_data["\x69\x6d\x61\147\145\163\137\x69\x64"]; goto VKOgx; HXCfF: $data["\x74\171\x70\145"] = "\x69\x6d\141\x67\145"; goto OfiCV; FVIMs: mxha4: goto PACCp; OfiCV: $data["\160\x69\x64"] = $pid; goto YzIIA; pcEQc: $images_state = $request_data["\151\x6d\141\x67\145\163\x5f\x73\164\141\x74\145"]; goto HXCfF; vfPKN: $images_path = $request_data["\151\x6d\141\147\145\163\137\160\x61\x74\150"]; goto pcEQc; G6Ufp: foreach ($images_id as $i => $id) { goto qHc21; qHc21: $data["\x74\x69\164\x6c\x65"] = $images_title[$i]; goto qjERn; fIJG7: t6uEY: goto XHNXk; IA7o5: goto LLu4u; goto fIJG7; rFnki: $data["\x73\164\x61\164\145"] = $images_state[$i]; goto YzpTY; xqWxU: htlK6: goto xC5PW; XQJqo: $this->db->insert($this->table, $data); goto S7T6y; ftdaL: $data["\x69\x6d\141\147\x65\x5f\160\x61\x74\x68"] = $images_path[$i]; goto XQJqo; Dlt6H: $this->db->update($this->table, $data, array("\x69\144", "\75", $id)); goto IA7o5; S7T6y: unset($data["\x69\155\141\147\145"], $data["\x69\x6d\x61\147\145\137\160\x61\x74\x68"]); goto xVwYJ; XHNXk: $data["\x69\155\x61\147\145"] = $images_name[$i]; goto ftdaL; qjERn: $data["\157\162\x64\145\x72\x62\171"] = $images_order[$i]; goto rFnki; xVwYJ: LLu4u: goto xqWxU; YzpTY: if (empty($id)) { goto t6uEY; } goto Dlt6H; xC5PW: } goto FVIMs; YzIIA: $data["\143\164\151\155\145"] = time(); goto G6Ufp; PACCp: } protected function _removeFiles2($files) { goto i29Ni; s5Opu: Xa4yR: goto nsbiT; MiNH2: if (!$files) { goto Xa4yR; } goto DZKyi; i29Ni: if (!(!empty($files) && !is_array($files))) { goto uTX3H; } goto SInoA; DZKyi: foreach ($files as $key => $value) { goto C4Cby; EclAD: $filename = $path . "\57" . $name; goto r27sQ; aE6Wm: if ($name) { goto ensWt; } goto ePcJ9; r27sQ: if (!file_exists($filename)) { goto GLVGH; } goto tQIYZ; kBUbZ: $prefixs = explode("\x2c", $prefix); goto HMRj4; UGp_T: if ($prefix) { goto ub42o; } goto EclAD; YqTpL: kGegI: goto S_lTC; XNDq9: ensWt: goto EtWEu; AZV2J: $prefix = $value["\x70\162\x65\x66\x69\x78"]; goto UGp_T; ePcJ9: goto sGi6q; goto XNDq9; S_lTC: fvkg9: goto ELo7u; gbGLS: goto fvkg9; goto B5TZ6; HMRj4: foreach ($prefixs as $prefix) { goto TVxdf; kpimD: SZ5v6: goto Uydpw; TVxdf: $filename = "{$path}\57{$prefix}{$name}"; goto HP34U; uTBCb: unlink($filename); goto kpimD; Uydpw: YxV4j: goto qjrbl; HP34U: if (!file_exists($filename)) { goto SZ5v6; } goto uTBCb; qjrbl: } goto YqTpL; ELo7u: sGi6q: goto GmD1t; EtWEu: $path = "\56\x2e\x2f" . $value["\160\141\x74\x68"]; goto AZV2J; tQIYZ: unlink($filename); goto M33pm; B5TZ6: ub42o: goto kBUbZ; C4Cby: $name = $value["\x6e\141\x6d\x65"]; goto aE6Wm; M33pm: GLVGH: goto gbGLS; GmD1t: } goto eih6e; SInoA: $files = json_decode($files, true); goto RxLZi; RxLZi: uTX3H: goto MiNH2; eih6e: mE1_0: goto s5Opu; nsbiT: } protected function _mkdir($path, $mode = 493) { goto tbzmM; aCC2W: return false; goto pBrhQ; tbzmM: if (is_dir($path)) { goto DnGIT; } goto wcyab; wcyab: return mkdir($path, $mode, true); goto PdHfb; PdHfb: DnGIT: goto aCC2W; pBrhQ: } protected function _rmdir($path) { goto FYGVm; WKSrW: unlink("{$path}\57{$item}"); goto rep5C; mvNCr: if (!(false !== ($item = readdir($handle)))) { goto u5llI; } goto LADPS; kpdRK: SesdZ: goto mvNCr; Lb2tH: MlY1N: goto B_SN5; O9fGM: gwUyg: goto auilf; B_SN5: return true; goto b0xPC; FYGVm: if (is_dir($path)) { goto CuZIo; } goto a0i_y; x2YlB: goto zXsXS; goto Lb2tH; a0i_y: return false; goto hzlgO; ijw8e: if (!($handle = opendir($path))) { goto o7ICY; } goto kpdRK; m6mNZ: CrvoO: goto L4Wa0; b0xPC: zXsXS: goto z3GPR; DBq9I: closedir($handle); goto K9TlE; jjC5d: if (is_dir("{$path}\57{$item}")) { goto gwUyg; } goto WKSrW; hzlgO: CuZIo: goto ijw8e; V98gv: u5llI: goto DBq9I; rep5C: goto uEom0; goto O9fGM; K9TlE: if (rmdir($path)) { goto MlY1N; } goto WiJTA; auilf: $this->_rmdir("{$path}\x2f{$item}"); goto Iz132; LADPS: if (!($item != "\56" && $item != "\56\x2e")) { goto CrvoO; } goto jjC5d; WiJTA: return false; goto x2YlB; L4Wa0: goto SesdZ; goto V98gv; Iz132: uEom0: goto m6mNZ; z3GPR: o7ICY: goto zGHrf; zGHrf: } protected function _bulidUploadPath($temp_path, $data) { goto T85It; XjWWH: if (!(strpos($path_last, "\x21\x3d") !== false)) { goto YozgX; } goto Xgvwr; Funer: $true_path = str_replace($path_last, $data[$vardir], $temp_path); goto ZZAjn; bjjRS: AaZ9Z: goto XjWWH; mgkkG: NkM1y: goto qit4h; JK4qU: $true_path = $temp_path; goto mgkkG; ZZAjn: YozgX: goto po46h; T85It: $id = $data["\x69\144"]; goto xHNI8; xHNI8: $path_last = end(explode("\x2f", $temp_path)); goto buvuO; R02M2: return $temp_path; goto bjjRS; po46h: if (!is_dir("\x2e\x2e\x2f" . $temp_path)) { goto iXPuD; } goto PpK19; Xgvwr: $vardir = current(explode("\x21\x3d", $path_last)); goto Funer; buvuO: if (!($path_last == $id)) { goto AaZ9Z; } goto R02M2; El9wb: return $true_path; goto qurA6; qit4h: iXPuD: goto El9wb; PpK19: if (rename("\56\x2e\x2f" . $temp_path, "\56\56\x2f" . $true_path)) { goto NkM1y; } goto JK4qU; qurA6: } protected function _toTree($list, $pk = "\151\x64", $pid = "\x70\x69\144", $child = "\137\x63\x68\x69\154\x64", $root = 0) { goto TurMP; h1vVe: foreach ($list as $key => $data) { $refer[$data[$pk]] =& $list[$key]; jFVS7: } goto o0Yaa; E6MRJ: if (!is_array($list)) { goto RESKg; } goto dlLiV; QJfJy: QyjW_: goto g176J; TurMP: $tree = array(); goto E6MRJ; NkqK2: foreach ($list as $key => $data) { goto sFQTc; tzE7H: YxOle: goto nf_k0; VXzu0: if ($root == $parentId) { goto tEmqn; } goto PJceE; sFQTc: $parentId = $data[$pid]; goto VXzu0; Tx91g: $parent =& $refer[$parentId]; goto JLM3H; T6M0Y: goto GoYjm; goto QuJFX; NaAUx: GoYjm: goto tzE7H; Te2nk: $tree[] =& $list[$key]; goto NaAUx; QuJFX: tEmqn: goto Te2nk; PJceE: if (!isset($refer[$parentId])) { goto URXvB; } goto Tx91g; LfnGq: URXvB: goto T6M0Y; JLM3H: $parent[$child][] =& $list[$key]; goto LfnGq; nf_k0: } goto QJfJy; dlLiV: $refer = array(); goto h1vVe; o0Yaa: yrFR1: goto NkqK2; g176J: RESKg: goto fCEmz; fCEmz: return $tree; goto q1vs6; q1vs6: } protected function _rand($length, $islowercase = true, $isuppercase = true, $isnumber = true, $isspecial = false) { goto qB7fV; dvhJR: $i++; goto rMeFW; zBUH7: k3ClI: goto DV10J; Rmp2R: return $result; goto twx0K; cPCQD: if (!$isnumber) { goto OIAxv; } goto XA2j1; KduvH: $chars .= "\x61\x62\143\x64\145\146\147\x68\x69\152\153\154\x6d\156\x6f\x70\161\x72\x73\x74\165\166\x77\x78\171\x7a"; goto SpxZ8; XA2j1: $chars .= "\60\61\62\63\x34\65\x36\x37\70\x39"; goto Hvr77; DV10J: $result = ''; goto nxJOL; rMeFW: goto cKIyO; goto W5tvh; ZScKM: $chars .= "\101\102\x43\x44\x45\106\x47\110\x49\x4a\x4b\x4c\115\x4e\x4f\x50\121\122\x53\x54\x55\126\x57\130\131\x5a"; goto g8JCF; j6iGx: $i = 0; goto n1Wo0; W5tvh: PyuHd: goto Rmp2R; nxJOL: $max = strlen($chars) - 1; goto j6iGx; SpxZ8: qf9Uq: goto Kctw9; SUs8v: $chars .= "\x21\x40\43\44\x25\x5e\46\x2a\x28\51"; goto zBUH7; zFhAT: if (!($i < $length)) { goto PyuHd; } goto IH0LM; g8JCF: iBKQd: goto cPCQD; IH0LM: $result .= $chars[rand(0, $max)]; goto gYi30; Kctw9: if (!$isuppercase) { goto iBKQd; } goto ZScKM; Hvr77: OIAxv: goto lhbh7; lhbh7: if (!$isspecial) { goto k3ClI; } goto SUs8v; gYi30: lKFaC: goto dvhJR; qB7fV: if (!$islowercase) { goto qf9Uq; } goto KduvH; n1Wo0: cKIyO: goto zFhAT; twx0K: } protected function _UTF82GBK($str) { goto SZqkT; SZqkT: if (stripos(php_uname("\x73"), "\x57\151\x6e\x64\157\x77") !== false) { goto HM0IN; } goto BpVOM; BmY0g: goto WRgyU; goto urjNY; BpVOM: return $str; goto BmY0g; oix5M: WRgyU: goto rONK7; urjNY: HM0IN: goto G1D4Y; G1D4Y: return iconv("\125\124\106\x2d\70", "\x47\x42\113\57\57\111\107\116\117\122\105", $str); goto oix5M; rONK7: } protected function _serialize($obj) { return base64_encode(gzcompress(serialize($obj))); } protected function _unserialize($txt) { return unserialize(gzuncompress(base64_decode($txt))); } protected function _getIP() { goto ry4XM; upnNr: KYB2d: goto Fc_EP; KKVyG: $realip = $realip[0]; goto B7uQl; zOG1Y: $realip = getenv("\x52\105\115\117\x54\x45\137\101\104\104\x52"); goto Cv623; ry4XM: if (isset($_SERVER)) { goto nANpG; } goto mIARG; bmC2R: $realip = empty($realip) ? $_SERVER["\122\105\x4d\x4f\124\x45\137\101\104\x44\122"] : $realip; goto l2zp9; gSUig: goto KYB2d; goto DGEY1; nPu97: nANpG: goto XU7fg; Fc_EP: F17wE: goto b5LLx; XU7fg: if (isset($_SERVER["\x48\x54\124\120\137\130\x5f\106\117\122\127\x41\x52\x44\105\104\x5f\106\x4f\x52"])) { goto spuIn; } goto BxBUl; jXYx8: if (getenv("\110\x54\124\120\x5f\103\x4c\x49\x45\116\x54\x5f\x49\120")) { goto K2DfU; } goto zOG1Y; l2zp9: goto ow69k; goto Vlzjc; MqxPd: $realip = $_SERVER["\x48\x54\124\x50\137\103\x4c\x49\105\116\x54\x5f\111\x50"]; goto upnNr; EZ96r: goto F17wE; goto nPu97; pK_O8: $realip = $_SERVER["\x48\x54\x54\x50\137\x58\137\106\x4f\122\x57\x41\x52\104\x45\104\137\x46\x4f\122"]; goto cwWJB; mIARG: if (getenv("\x48\124\x54\120\x5f\130\137\106\117\x52\127\101\x52\x44\105\104\137\x46\x4f\x52")) { goto ydPUo; } goto jXYx8; VdevE: ydPUo: goto STyg2; Vlzjc: K2DfU: goto c48LI; cwWJB: $realip = explode("\x2c", $realip); goto KKVyG; RViSb: spuIn: goto pK_O8; b5LLx: return $realip; goto tN5qZ; DGEY1: oigZK: goto MqxPd; STyg2: $realip = getenv("\x48\x54\124\120\137\130\x5f\106\117\122\x57\x41\x52\104\x45\x44\x5f\x46\x4f\122"); goto zaEUx; zaEUx: $realip = explode("\x2c", $realip); goto GqMSL; bERoH: $realip = $_SERVER["\122\x45\115\117\x54\x45\137\101\x44\104\122"]; goto fVQkQ; fVQkQ: goto KYB2d; goto RViSb; B7uQl: $realip = empty($realip) ? $_SERVER["\122\x45\x4d\x4f\124\105\137\101\104\104\122"] : $realip; goto gSUig; t6OYI: ow69k: goto EZ96r; BxBUl: if (isset($_SERVER["\110\x54\124\x50\137\x43\114\x49\x45\116\x54\137\111\120"])) { goto oigZK; } goto bERoH; Cv623: goto ow69k; goto VdevE; GqMSL: $realip = $realip[0]; goto bmC2R; c48LI: $realip = getenv("\110\x54\124\x50\x5f\103\x4c\x49\x45\116\x54\x5f\111\120"); goto t6OYI; tN5qZ: } protected function _trash($item, $request_data) { goto mHMGO; mHMGO: $data = array(); goto crD_h; tlfgH: $data["\163\x74\x61\164\145"] = 0; goto YE5Ea; MqT4d: $data["\x70\x61\x74\150"] = $path ? $item[$path] : ''; goto qAzlH; XZ6Y2: $path = $request_data["\x70\x61\164\150"]; goto MqT4d; zsSlK: $data["\141\144\x6d\151\x6e\x5f\x6e\141\x6d\x65"] = $this->admin["\x6e\141\155\145"]; goto SBdFS; zrtzo: $data["\164\151\164\154\145"] = $item["\164\151\164\x6c\x65"]; goto XZ6Y2; YE5Ea: $data["\x63\x74\151\x6d\145"] = time(); goto ujaIn; SBdFS: $data["\156\x6f\x74\145"] = $request_data["\156\157\164\145"]; goto zrtzo; qAzlH: $data["\x74\x61\x62\154\x65"] = $this->table; goto bGmNO; ujaIn: return $this->db->insert("\164\162\141\x73\150", $data)->is(); goto WHU96; crD_h: $data["\141\x64\155\151\156\137\x69\144"] = $this->admin["\x69\144"]; goto zsSlK; bGmNO: $data["\x64\141\164\141"] = json_encode($item); goto tlfgH; WHU96: } protected function _log($type, $data = array()) { goto L6SvV; DSxG3: $data["\164\171\160\x65"] = $type; goto uoeLr; EMJVu: $data["\x61\x64\x6d\151\156\137\156\141\155\145"] = $this->admin["\156\141\x6d\145"]; goto nbKAz; nbKAz: $data["\165\162\x6c"] = $_SERVER["\x48\x54\124\x50\137\122\x45\x46\x45\122\x45\122"]; goto GgCt_; Rq7So: $data["\x63\164\151\155\145"] = time(); goto CNEqd; GgCt_: EM6LE: goto XshY9; uoeLr: $data["\151\x70"] = $this->_getIP(); goto Rq7So; CNEqd: return $this->db->insert("\154\x6f\147", $data)->is(); goto eF6R4; XKdrc: $data["\141\144\x6d\x69\x6e\137\151\x64"] = $this->admin["\151\x64"]; goto EMJVu; XshY9: $data["\x74\141\142\154\x65"] = $this->table; goto DSxG3; L6SvV: if (!($type != "\154\x6f\x67\x69\156")) { goto EM6LE; } goto XKdrc; eF6R4: } protected function _debug($message) { $log = ifeiwu\Log::getInstance(); $log->debug($message); } }
