<?php
 goto FYZH1; t3n09: $authorid = 0; goto n0z7O; FCpzq: if (!($curuser["\143\x61\156\160\x75\142\x6c\x69\163\150"] == 1)) { goto Jci8_; } goto ywoWT; RBAKq: $author = pdo_fetch("\x73\x65\x6c\x65\143\164\40\52\x20\146\x72\157\x6d\40" . tablename("\141\155\x64\137\161\155\x72\x77\164\x67\137\141\165\164\150\157\162") . "\40\x77\150\x65\162\145\x20\165\156\151\141\x63\151\x64\x3d\x3a\165\156\151\x61\x63\x69\144\x20\x61\x6e\x64\x20\157\160\x65\156\151\144\x3d\72\157\160\x65\156\x69\x64", array("\72\x75\x6e\x69\x61\143\151\144" => $uniacid, "\x3a\x6f\160\145\156\x69\x64" => $openid)); goto U8Li4; sLOgG: $author = pdo_fetch("\163\x65\154\x65\143\164\40\52\x20\146\162\x6f\155\40" . tablename("\141\x6d\144\137\x71\x6d\x72\x77\164\x67\137\141\x75\x74\150\x6f\162") . "\x20\x77\x68\145\162\x65\x20\x75\x6e\151\141\x63\x69\144\x3d\72\x75\x6e\151\x61\143\x69\x64\40\x61\x6e\x64\x20\157\160\x65\156\151\144\75\x3a\x6f\160\x65\x6e\151\x64", array("\72\165\x6e\151\x61\x63\151\144" => $uniacid, "\72\x6f\x70\x65\156\x69\144" => $openid)); goto UrTek; P2Dls: exit; goto KMUlq; L1UO1: header("\x43\157\156\x74\145\156\x74\55\x74\x79\160\x65\x3a\40\141\x70\x70\x6c\151\143\x61\164\151\157\156\57\152\163\157\x6e"); goto q4X6u; A1jd2: if (!$_GPC["\x70\x61\x67\x65"]) { goto Moe2T; } goto hEaOM; HgWiJ: $openid = $_W["\157\x70\145\x6e\151\x64"]; goto vT_dT; U8Li4: Jci8_: goto tHfV7; X4jNc: $uniacid = $_W["\x75\156\151\x61\143\151\x64"]; goto ila0y; Rat3Z: $psize = 6; goto U4UyD; FYZH1: ?>
﻿<?php  goto ruyDb; tfqRG: Es_Ij: goto t3n09; UrTek: if (!empty($author)) { goto nGWZg; } goto FCpzq; tHfV7: nGWZg: goto FQy_S; C8Xhk: $data["\x74\x6f\x74\141\154"] = $total; goto CgPC4; FQy_S: if (empty($author)) { goto Es_Ij; } goto XR1DW; q4X6u: echo json_encode($data); goto P2Dls; HsmyW: $result = pdo_insert("\x61\155\x64\137\161\x6d\x72\167\x74\x67\x5f\x61\x75\x74\x68\157\162", $insert); goto RBAKq; at8Ba: goto eZAhG; goto tfqRG; ruyDb: global $_W, $_GPC; goto X4jNc; KMUlq: Moe2T: goto UgJkh; n0z7O: eZAhG: goto A1jd2; vT_dT: $pindex = max(1, intval($_GPC["\160\141\147\145"])); goto Rat3Z; U4UyD: $user = pdo_fetch("\x73\x65\x6c\145\x63\x74\x20\x2a\40\x66\x72\157\155\x20" . tablename("\x61\155\144\137\x71\x6d\x72\x77\164\x67\x5f\165\x73\145\162") . "\x20\x20\167\x68\x65\x72\145\40\x6f\160\x65\156\151\144\x3d\x3a\157\160\145\x6e\x69\144\40\141\x6e\x64\40\x75\156\151\141\x63\x69\144\75\x3a\165\x6e\x69\x61\143\x69\144\40", array("\165\x6e\x69\x61\x63\x69\144" => $uniacid, "\x6f\160\145\156\151\144" => $openid)); goto jhlQY; ila0y: include MODULE_ROOT . "\57\151\156\143\x2f\155\x6f\142\151\x6c\x65\x2f\155\x63\x6f\155\x6d\x6f\x6e\56\x69\156\x63\x2e\x70\150\160"; goto HgWiJ; jhlQY: $total = pdo_fetchcolumn("\x73\x65\154\x65\x63\164\40\143\x6f\165\x6e\164\50\x30\51\x20\x66\162\x6f\155\40" . tablename("\141\155\x64\x5f\161\x6d\162\x77\164\x67") . "\40\x57\110\105\122\x45\x20\x75\x6e\151\x61\143\151\x64\x3d\x3a\x75\156\151\141\x63\151\144\x20\x41\x4e\x44\40\165\163\x65\162\151\x64\x3d\x3a\x75\x73\x65\x72\x69\144", array("\72\x75\156\151\141\x63\151\144" => $uniacid, "\72\165\163\x65\x72\x69\144" => $user["\151\x64"])); goto cslu1; ywoWT: $insert = array("\165\x6e\x69\x61\143\151\144" => $uniacid, "\157\x70\x65\156\x69\144" => $openid, "\156\151\x63\153\156\x61\x6d\145" => $curuser["\x6e\151\143\153\156\x61\155\145"], "\x61\166\x61\164\x61\162" => $curuser["\141\x76\x61\164\x61\x72"], "\143\162\x65\x61\164\145\x74\x69\x6d\145" => TIMESTAMP); goto HsmyW; XR1DW: $authorid = $author["\151\144"]; goto at8Ba; cslu1: $list_collect = pdo_fetchall("\x53\x45\114\x45\x43\124\x20\52\x20\x46\122\x4f\115\x20" . tablename("\x61\155\144\137\161\x6d\x72\167\164\x67") . "\40\127\110\105\x52\105\x20\165\x6e\151\141\143\151\x64\75\72\x75\x6e\151\141\143\151\144\x20\101\116\104\40\x75\163\145\x72\x69\x64\75\x3a\165\163\x65\162\151\144\x20\117\x52\x44\x45\122\x20\x42\x59\40\151\x64\x20\104\x45\123\103\40\x4c\x49\115\x49\124\40" . intval($pindex - 1) * $psize . "\x2c" . $psize, array("\72\x75\x6e\151\x61\x63\151\144" => $uniacid, "\x3a\165\x73\145\162\x69\x64" => $user["\151\x64"])); goto sLOgG; hEaOM: $data["\154\151\x73\x74\x5f\x63\x6f\x6c\x6c\145\143\x74"] = $list_collect; goto ZCbLJ; ZCbLJ: $data["\x70\141\147\x65"] = $pindex; goto C8Xhk; CgPC4: $data["\160\x73\x69\172\145"] = $psize; goto L1UO1; UgJkh: include $this->template("\x61\162\x74\x69\143\x6c\x65\x2f\155\171\141\x63\164\x6c\151\x73\x74");