<?php
 goto wkPCV; NiJp9: $parms = array("\72\165\x6e\151\x61\x63\x69\x64" => $uniacid); goto hrddq; H7Zqh: cVVSu: goto qqiMh; MHkQi: $sql = "\163\145\x6c\145\143\164\40\52\40\x66\162\157\155\40" . tablename("\141\x6d\x64\x5f\161\155\162\x77\164\x67\x5f\x67\162\x6f\x75\x70") . "\x20\40\167\x68\x65\162\145\40\x69\144\x20\x6e\x6f\164\x20\151\156\x20\x28{$appointid}\x29\40\141\x6e\x64\x20\x75\156\x69\x61\143\151\x64\x3d\x3a\165\156\x69\x61\143\151\144\40\x6c\151\155\151\x74\40" . intval($pindex - 1) * $psize . "\54" . $psize; goto zvUA2; Bh_qm: $total = pdo_fetchcolumn("\163\145\x6c\145\143\164\40\x63\x6f\x75\x6e\x74\50\x2a\51\40\146\x72\157\155\40" . tablename("\x61\155\144\137\161\155\162\167\x74\147\x5f\147\162\157\165\160") . "\40\x20\x77\150\x65\162\x65\40\165\156\151\141\143\151\x64\x3d\72\x75\x6e\151\x61\x63\x69\144\x20", array("\x3a\x75\x6e\151\x61\143\x69\144" => $uniacid)); goto q0JJK; hrddq: $records = pdo_fetchall($sql, $parms); goto Bh_qm; QTT6m: $array = pdo_fetch($sql, $parms); goto McJs3; G7rSM: if (!($op == "\143\x68\145\143\153\x62\157\x78")) { goto cVVSu; } goto PKIBG; kb6_5: goto MDG0s; goto CXwr1; I0Snz: $parms = array("\72\x75\x6e\151\141\143\151\x64" => $uniacid, "\72\141\151\x64" => $aid); goto QTT6m; pYBY0: $appointid = substr($appointid["\141\160\160\x6f\x5f\x75\x73\x65\162\x73"], 0, -1); goto MCaQ8; ig42B: $uniacid = $_W["\165\156\151\x61\143\151\x64"]; goto wduaS; g1FrK: $data = array("\163\165\143\143\145\x73\163" => 0); goto kb6_5; QSald: $sql = "\163\x65\x6c\x65\x63\164\40\x2a\x20\146\x72\157\155\x20" . tablename("\x61\155\144\x5f\161\x6d\162\x77\x74\147") . "\x20\167\x68\x65\x72\145\x20\40\x75\156\151\141\143\x69\144\x3d\x3a\x75\156\151\141\143\151\x64\x20\x61\x6e\x64\40\151\144\75\x3a\x61\151\144"; goto I0Snz; wduaS: $op = !empty($_GPC["\x6f\160"]) ? $_GPC["\x6f\x70"] : "\x64\x69\x73\160\154\141\171"; goto G7rSM; qqiMh: $sql = "\163\x65\x6c\x65\x63\164\40\141\x70\160\157\137\x75\163\x65\x72\163\40\146\x72\157\x6d\x20" . tablename("\x61\x6d\144\x5f\161\155\x72\167\164\x67") . "\x20\40\x77\150\x65\162\x65\x20\40\151\144\x3d" . $_GET["\151\144"] . "\x20\141\x6e\144\40\x75\x6e\151\x61\x63\151\144\75\72\x75\x6e\151\x61\x63\151\x64\40"; goto Wh1mw; CXwr1: EXdQn: goto g1Yuw; MCaQ8: if (!empty($appointid)) { goto L3g4J; } goto ZAttP; McJs3: $endid = array("\x61\160\x70\x6f\137\165\x73\145\x72\163" => $array["\141\160\x70\157\x5f\165\x73\x65\162\163"] . $newid); goto IqzjF; TnEvJ: $aid = $_GPC["\141\151\144"]; goto QSald; zvUA2: $parms = array("\x3a\x75\156\x69\x61\143\151\144" => $uniacid); goto tr5b0; MJOAn: if ($new) { goto EXdQn; } goto g1FrK; U3Ew0: die; goto H7Zqh; O0Vmk: wmFi_: goto AKyTi; IqzjF: $new = pdo_update("\x61\155\144\x5f\161\x6d\x72\167\x74\147", $endid, array("\x69\144" => $aid)); goto MJOAn; wkPCV: global $_W, $_GPC; goto JvZir; VFwnp: MDG0s: goto TTLhk; DzZVf: $psize = 10; goto ig42B; AKyTi: $pager = pagination($total, $pindex, $psize); goto CrjIh; Wh1mw: $parms = array("\x3a\x75\156\x69\x61\x63\x69\x64" => $uniacid); goto ZiK_Q; q0JJK: goto wmFi_; goto dUQ0g; PKIBG: $newid = $_GPC["\143\x68\145\143\153\x62\157\x78\137\x76\141\154"]; goto TnEvJ; TTLhk: header("\x43\157\156\164\x65\x6e\x74\55\164\x79\160\x65\72\x61\160\160\154\151\x63\141\x74\151\x6f\x6e\57\x6a\x73\x6f\x6e"); goto U_ylP; JvZir: load()->func("\x74\160\x6c"); goto oExb3; u17TT: $pindex = max(1, intval($_GPC["\160\x61\147\145"])); goto DzZVf; tHxJE: $total = pdo_fetchcolumn("\163\145\x6c\x65\143\x74\40\143\x6f\165\x6e\x74\x28\52\x29\x20\x66\x72\x6f\x6d\x20" . tablename("\x61\x6d\x64\x5f\x71\155\162\167\164\x67\x5f\x67\162\157\x75\x70") . "\40\x20\167\150\x65\x72\x65\40\x69\144\x20\156\x6f\x74\40\151\156\40\x28{$appointid}\51\40", array("\x3a\x75\x6e\x69\x61\143\151\x64" => $uniacid)); goto O0Vmk; ZAttP: $sql = "\x73\145\x6c\x65\143\164\40\52\x20\x66\x72\x6f\155\40" . tablename("\141\155\144\137\161\155\162\167\164\x67\137\147\x72\x6f\x75\x70") . "\40\40\x77\x68\x65\x72\x65\40\x20\x75\x6e\151\141\x63\151\x64\75\72\165\156\x69\141\143\x69\144\x20\154\151\155\x69\164\x20" . intval($pindex - 1) * $psize . "\54" . $psize; goto NiJp9; ZiK_Q: $appointid = pdo_fetch($sql, $parms); goto pYBY0; oExb3: $id = $_GPC["\x69\144"]; goto u17TT; g1Yuw: $data = array("\163\165\143\x63\145\x73\x73" => 1); goto VFwnp; tr5b0: $records = pdo_fetchall($sql, $parms); goto tHxJE; U_ylP: echo json_encode($data); goto U3Ew0; dUQ0g: L3g4J: goto MHkQi; CrjIh: include $this->template("\141\144\144\137\141\160\160\x6f\x69\x6e\164");