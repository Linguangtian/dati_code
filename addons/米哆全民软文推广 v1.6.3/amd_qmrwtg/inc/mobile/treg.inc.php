<?php
 goto GOXeh; OHUyl: echo json_encode($fmdata); goto khfRu; XCIeR: function downloadWeixinFile($url) { goto SoP6E; zHq8d: $package = curl_exec($ch); goto G1a1k; NuSZu: curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); goto zHq8d; qDviF: curl_setopt($ch, CURLOPT_NOBODY, 0); goto JwwZT; JwwZT: curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); goto lCWng; wyKK2: return $imageAll; goto pSARL; D0Asb: curl_setopt($ch, CURLOPT_HEADER, 0); goto qDviF; G1a1k: $httpinfo = curl_getinfo($ch); goto ZCn6h; SoP6E: $ch = curl_init($url); goto D0Asb; Ok2xJ: $imageAll = array_merge(array("\150\x65\141\144\145\x72" => $httpinfo), array("\x62\x6f\x64\x79" => $package)); goto wyKK2; ZCn6h: curl_close($ch); goto Ok2xJ; lCWng: curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); goto NuSZu; pSARL: } goto X4lvo; X4lvo: function saveWeixinFile($filename, $filecontent) { goto Odr4V; EgUD9: fclose($local_file); goto yyeLK; yyeLK: zSi8U: goto eL5NQ; rtkK2: if (!(false !== $local_file)) { goto RutmQ; } goto JDPJz; JDPJz: if (!(false !== fwrite($local_file, $filecontent))) { goto zSi8U; } goto EgUD9; eL5NQ: RutmQ: goto OFrbm; Odr4V: $local_file = fopen($filename, "\167"); goto rtkK2; OFrbm: } goto qa0ed; Slh4J: $fmdata = array("\163\165\143\143\145\163\x73" => -1, "\x6d\x73\x67" => "\346\xb2\241\xe6\x9c\x89\xe6\211\276\345\x88\xb0\345\233\276\347\211\x87\x21"); goto OHUyl; cLvrn: HqixS: goto cLutN; nloJc: $mediaids = $_GPC["\x6d\145\x64\x69\x61\x69\144\163"]; goto Glb7V; lYjQM: $head = $_W["\x61\x74\x74\x61\x63\x68\165\162\154"] . str_replace("\56\x2e\x2f\141\164\x74\141\143\x68\x6d\145\156\x74\x2f", '', substr($filename, 0, strlen($filename) - 1)); goto JAwCm; khfRu: exit; goto fLtpf; fLtpf: LJfJF: goto wgu6H; Glb7V: if (!empty($mediaids)) { goto LJfJF; } goto Slh4J; qa0ed: global $_GPC, $_W; goto nloJc; GOXeh: function downloadImage($mediaids) { goto Hd6a5; n0Ah9: foreach ($mediaarray as $mediaid) { goto EK2V3; Uktde: yaJWD: goto b5EOq; XAFZZ: $fileInfo = downloadWeixinFile($url); goto kZ8cz; EK2V3: $filename = "\106\x4d\106\x65\x74\x63\x68\x69" . date("\x59\x6d\144\x48\151\x73") . random(16); goto YPacE; suMw6: $filenames .= $filename . "\54"; goto Uktde; rdGLe: mkdirs($updir); goto bpwhL; lfW1h: $url = "\150\x74\x74\x70\72\57\x2f\146\x69\154\x65\56\x61\x70\151\56\167\x65\151\x78\x69\156\x2e\x71\x71\x2e\143\157\155\57\143\x67\151\55\142\x69\x6e\57\155\145\144\x69\x61\57\147\x65\164\x3f\141\x63\x63\x65\x73\163\137\x74\157\153\x65\x6e\75{$access_token}\46\155\145\x64\x69\141\x5f\x69\144\75{$mediaid}"; goto XAFZZ; kZ8cz: $updir = "\56\x2e\x2f\141\164\164\x61\143\x68\155\145\156\164\57\x69\x6d\x61\x67\x65\163\x2f" . $uniacid . "\x2f" . date("\131") . "\x2f" . date("\x6d") . "\57"; goto g8BLN; Q_0Gz: saveWeixinFile($filename, $fileInfo["\142\157\x64\171"]); goto suMw6; gnY2S: $filename = $updir . $filename . "\x2e\x6a\x70\147"; goto Q_0Gz; YPacE: $access_token = $account->fetch_token(); goto lfW1h; g8BLN: if (is_dir($updir)) { goto KE6sS; } goto rdGLe; bpwhL: KE6sS: goto gnY2S; b5EOq: } goto EbvfQ; J_tYg: $uniacid = $_W["\165\x6e\151\x61\x63\x69\x64"]; goto x_cws; YzeqR: $account = WeAccount::create($_W["\x61\x63\x63\157\x75\x6e\x74"]); goto OELHK; OELHK: $mediaarray = explode("\x2c", $mediaids); goto Ux_Lf; EbvfQ: fx2E7: goto DsTXg; x_cws: load()->func("\146\151\x6c\x65"); goto YzeqR; Ux_Lf: $filenames = ''; goto n0Ah9; Hd6a5: global $_W; goto J_tYg; DsTXg: return $filenames; goto SQUJW; SQUJW: } goto XCIeR; JAwCm: pdo_update("\141\155\x64\137\161\155\x72\x77\164\x67\x5f\x75\x73\x65\162", array("\141\166\x61\164\x61\x72" => $head), array("\151\144" => $_GPC["\x75\151\x64"])); goto cLvrn; Z2DEE: if (empty($_GPC["\165\151\144"])) { goto HqixS; } goto lYjQM; cLutN: $fmdata = array("\163\x75\x63\x63\145\x73\x73" => 1, "\151\x6d\147\165\162\x6c" => $filename); goto ldRJV; wgu6H: $filename = downloadImage($mediaids); goto Z2DEE; ldRJV: echo json_encode($fmdata); goto jTJe8; jTJe8: exit;