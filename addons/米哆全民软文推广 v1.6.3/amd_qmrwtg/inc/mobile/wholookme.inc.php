<?php
 goto j1OC8; fKptH: $data["\164\x6f\x74\x61\x6c"] = $total; goto yncFc; j1OC8: global $_W, $_GPC; goto t6zW0; pSn4U: mI7dK: goto i4jI0; W_kwe: if (!($pindex < 1)) { goto n8f6z; } goto hOBJq; yncFc: $data["\160\163\151\172\145"] = $psize; goto gfPuN; oZGxJ: $data["\x70\x61\x67\x65"] = $pindex; goto fKptH; i4jI0: unset($lkey); goto I3tdP; mi6nr: $list = pdo_fetchall("\123\x45\x4c\x45\103\x54\x20\x2a\x20\106\122\x4f\115\x20" . tablename("\x61\x6d\144\137\161\x6d\x72\167\x74\147\137\x76\151\145\167\154\x6f\147") . "\x20\127\x48\105\x52\105\x20\165\156\x69\141\x63\x69\x64\x3d\x3a\165\156\x69\x61\143\151\144\40\101\116\x44\40\x61\144\x76\x69\144\x3d\72\141\x64\166\151\144\x20\141\156\144\40\157\160\145\x6e\151\144\74\x3e\x27\x27\40\x4f\122\104\105\122\x20\102\131\x20\x69\x64\x20\x44\x45\x53\103\40\x4c\x49\115\x49\x54\x20" . intval($pindex - 1) * $psize . "\x2c" . $psize, array("\x3a\x75\156\151\x61\x63\151\x64" => $uniacid, "\x3a\141\144\166\151\144" => $curadver["\151\x64"])); goto s3VbH; xzz9n: $_GPC["\x61\x64\166\151\144"] = 0; goto eHGB9; fXxY6: MdSQI: goto qJZ1P; hOBJq: $pindex = 1; goto XYHK8; ZEi2U: echo json_encode($data); goto Nbwzt; XYHK8: n8f6z: goto GLX4q; JldnR: $pindex = intval($_GPC["\x70\x69\x6e\144\145\170"]); goto W_kwe; VIos7: $total = pdo_fetchcolumn("\163\145\154\145\143\164\40\x63\157\x75\x6e\164\50\60\x29\40\x66\x72\x6f\155\x20" . tablename("\x61\x6d\x64\137\161\x6d\162\167\164\x67\137\x76\151\145\167\154\157\x67") . "\40\x57\110\105\x52\105\x20\165\156\151\x61\x63\x69\x64\75\72\165\x6e\151\141\x63\151\144\40\x41\x4e\x44\x20\x6f\x70\145\x6e\x69\144\74\76\47\47\40\141\156\144\x20\x61\x64\166\x69\x64\x3d\x3a\141\144\x76\151\x64", array("\72\x75\x6e\x69\141\x63\x69\x64" => $uniacid, "\72\x61\144\166\151\x64" => $curadver["\151\144"])); goto EMthC; t6zW0: $uniacid = $_W["\x75\156\151\x61\x63\151\x64"]; goto xzz9n; GLX4q: $psize = 20; goto VIos7; Nbwzt: exit; goto fXxY6; R8Q8y: $data["\x6c\x69\163\x74"] = $list; goto oZGxJ; EMthC: $todaytotal = pdo_fetchcolumn("\163\145\154\145\143\x74\x20\x63\x6f\x75\156\x74\x28\60\x29\40\x66\x72\x6f\x6d\x20" . tablename("\141\155\144\x5f\x71\155\162\167\x74\147\x5f\166\151\x65\167\154\x6f\x67") . "\40\127\x48\105\x52\x45\x20\165\156\x69\x61\x63\x69\x64\x3d\x3a\x75\x6e\x69\141\143\151\144\x20\101\116\x44\40\141\144\166\151\144\x3d\x3a\141\144\166\x69\144\x20\x61\x6e\144\40\x6f\x70\145\x6e\151\x64\x3c\76\47\x27\x20\x61\x6e\x64\40\x66\151\162\163\x74\164\151\155\145\76" . strtotime(date("\131\55\x6d\55\x64")), array("\72\165\156\151\141\143\151\x64" => $uniacid, "\72\x61\144\166\x69\x64" => $curadver["\151\144"])); goto mi6nr; I3tdP: if (!$_GPC["\x70\x69\156\144\145\170"]) { goto MdSQI; } goto R8Q8y; gfPuN: header("\103\157\x6e\x74\x65\156\164\55\164\x79\x70\x65\72\x20\x61\160\160\x6c\151\x63\141\x74\151\x6f\156\57\152\x73\157\156"); goto ZEi2U; s3VbH: foreach ($list as &$lkey) { goto qJ5HQ; qd0KF: R_kI5: goto RC_Mf; NDuZ1: $lkey["\x61\x76\141\x74\141\x72"] = $suser["\141\x76\x61\x74\141\162"]; goto xBGZw; HRP4h: if (empty($suser)) { goto SX2_s; } goto Atng6; ooxkv: $suser = pdo_fetch("\x73\x65\x6c\x65\x63\164\40\52\x20\146\162\x6f\x6d\40" . tablename("\x61\x6d\144\x5f\x71\x6d\162\x77\x74\147\x5f\165\x73\145\x72") . "\x20\40\x77\150\145\x72\145\40\157\160\145\x6e\151\144\x3d\72\x6f\x70\x65\x6e\151\144\40\141\156\x64\40\165\x6e\x69\141\x63\151\144\75\72\165\x6e\x69\x61\x63\151\144\x20", array("\x75\x6e\x69\141\143\151\x64" => $uniacid, "\157\160\145\156\151\x64" => $lkey["\157\x70\145\x6e\x69\x64"])); goto HRP4h; xBGZw: SX2_s: goto qd0KF; Atng6: $lkey["\x6e\151\143\x6b\x6e\x61\x6d\145"] = $suser["\x6e\151\143\153\156\x61\x6d\145"]; goto NDuZ1; qJ5HQ: if (!(empty($lkey["\156\x69\143\153\x6e\x61\x6d\145"]) || empty($lkey["\x61\x76\141\164\x61\x72"]))) { goto R_kI5; } goto ooxkv; RC_Mf: M7uYT: goto PUF6N; PUF6N: } goto pSn4U; eHGB9: include MODULE_ROOT . "\57\x69\x6e\143\x2f\x6d\x6f\x62\151\154\145\x2f\x6d\x63\x6f\x6d\155\x6f\156\x2e\x69\x6e\143\56\160\x68\x70"; goto JldnR; qJZ1P: include $this->template("\x77\150\157\154\157\157\x6b\x6d\x65");