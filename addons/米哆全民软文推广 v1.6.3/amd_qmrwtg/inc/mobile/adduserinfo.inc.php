<?php
 goto FYOQA; y7rZJ: $uniacid = $_W["\165\x6e\x69\x61\x63\151\144"]; goto f6saq; lK2dP: $data["\x63\x6f\x6e\164\x65\156\x74"] = "\xe6\212\xb1\xe6\255\x89\357\xbc\214\xe4\277\xa1\346\201\257\xe8\257\273\345\217\226\xe9\224\231\350\xaf\257\xef\xbc\201"; goto hzP7F; ohqhk: GIl0q: goto WJsPW; yuF_I: uV84I: goto L5n24; sKxuR: tLjVl: goto vzEuQ; hzP7F: hIyZt: goto xizSg; tYAU0: $data["\x73\x75\x63\x63\145\x73\x73"] = 1; goto vpZ4O; xizSg: header("\x43\x6f\x6e\164\x65\x6e\164\x2d\x74\171\160\x65\72\x20\x61\x70\x70\x6c\151\x63\x61\x74\x69\x6f\x6e\x2f\152\x73\x6f\x6e"); goto kI1GL; f6saq: $realname = $_GPC["\162\145\x61\x6c\x6e\141\155\x65"]; goto c59Y9; EiudW: $data["\x63\157\156\164\x65\x6e\164"] = "\xe5\247\223\xe5\220\x8d\xe5\x92\x8c\xe6\x89\213\xe6\x9c\xba\345\217\xb7\xe4\xb8\x8d\xe8\203\275\xe4\270\272\xe7\251\xba"; goto Nfsa5; Nfsa5: goto uV84I; goto sKxuR; gFh0z: $curinfo = pdo_fetch("\163\145\x6c\145\x63\x74\x20\x2a\40\146\x72\157\155\x20" . tablename("\x61\155\x64\x5f\161\x6d\x72\x77\164\147\137\x75\163\145\162") . "\40\x20\167\x68\x65\162\145\x20\x6f\160\145\x6e\151\144\75\72\x6f\160\x65\156\x69\x64\40\141\156\144\x20\165\x6e\x69\141\143\x69\144\x3d\72\165\156\x69\x61\x63\151\144\x20", array("\165\156\151\141\143\x69\x64" => $uniacid, "\x6f\x70\145\156\151\x64" => $_W["\157\x70\x65\x6e\151\144"])); goto mmc9N; L5n24: goto hIyZt; goto ohqhk; FYOQA: global $_W, $_GPC; goto y7rZJ; pIZOj: $sdata = array(); goto KBmBh; vpZ4O: $data["\143\x6f\156\164\145\x6e\x74"] = "\344\xbf\x9d\xe5\255\x98\346\x88\220\xe5\212\x9f"; goto yuF_I; KBmBh: if (!empty($mobile) && !empty($realname)) { goto tLjVl; } goto E2G3w; Z3ndx: pdo_update("\141\155\x64\x5f\161\x6d\162\167\x74\x67\x5f\165\163\x65\x72", $sdata, array("\151\x64" => $curinfo["\x69\144"])); goto tYAU0; E2G3w: $data["\163\165\143\x63\x65\163\x73"] = 1; goto EiudW; vzEuQ: $sdata["\x72\145\141\154\156\141\155\145"] = $realname; goto wH1W6; mmc9N: if (empty($curinfo)) { goto GIl0q; } goto pIZOj; wH1W6: $sdata["\155\157\142\151\154\x65"] = $mobile; goto Z3ndx; WJsPW: $data["\163\165\143\143\145\x73\x73"] = -1; goto lK2dP; c59Y9: $mobile = $_GPC["\x6d\x6f\142\151\x6c\145"]; goto gFh0z; kI1GL: echo json_encode($data);