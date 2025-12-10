<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIRIMS</title>
    <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a,0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4,0,1,1);--ease-out:cubic-bezier(0,0,.2,1);--ease-in-out:cubic-bezier(.4,0,.2,1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0,0,.2,1)infinite;--animate-pulse:pulse 2s cubic-bezier(.4,0,.6,1)infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}
            </style>
        @endif
            <script src="{{ asset('js/app.js') }}"></script>
</head>

 <body class="min-h-screen max-w-full bg-[#F4F4F5]">
<header class="fixed top-0 left-0 w-full z-[100] flex bg-white items-center px-4 h-16 sm:px-10 md:h-20 justify-between">

         <!-- Hamburger Button (shows only on mobile) -->
    <button id="menu-btn" class="block md:hidden focus:outline-none cursor-pointer">
      <!-- 3-line hamburger icon -->
      <svg class="w-10" fill="none" stroke="var(--darkgray)" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

    <div class="md:flex items-center gap-2.5 bg ">
        <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="md:w-[50px] w-[35px] md:block hidden">
            <circle cx="25" cy="25" r="25" fill="#EA580C"/>
        </svg>
        <h1 class="font-medium font text-[30px] md:text-[30px] text-[#EA580C] ">BIRIMS</h1>
    </div>

    <div class="flex items-center">
        <!-- Off-canvas left panel on mobile; static/inline on md+ -->
        <div id="menu" class="fixed md:static left-0 top-16 md:top-auto md:left-auto z-40 md:flex md:justify-end md:items-center md:pr-10 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out w-64 md:w-auto h-[calc(100vh-4rem)] md:h-auto bg-white md:bg-transparent p-4 md:p-0">
            <!-- Column on mobile, row on md+ -->
            <ul class="flex flex-col md:flex-row gap-6 lg:gap-[40px]">
             <!-- The request()->is() function checks if the current URL matches and adds active automatically.
                     So when you move between pages, the correct menu stays highlighted -->
             <li><a href="{{url('/')}}" class="header-nav {{request()-> is('/') ? 'active' : ''}}">Home</a></li>
             <li><a href="{{url('about')}}" class="header-nav {{request()-> is('about') ? 'active' : ''}}">About Us</a></li>
             <li><a href="{{url('contact')}}" class="header-nav {{request()-> is('contact') ? 'active' : ''}}">Contact</a></li>
             <li><a href="{{url('faq')}}" class="header-nav {{request()-> is('faq') ? 'active' : ''}}">FAQs</a></li>
            </ul>
        </div>
        <a href="{{ url('signin') }}" class="whitespace-nowrap p-[12px] bg-[var(--orange)] text-white rounded-[4px] border border-white duration-150 ease-in hover:bg-white hover:text-[var(--orange)] hover:border-[var(--orange)] text-[14px] md:text-[16px]">SIGN-IN</a>
    </div>

</header>

     <main class="min-h-screen w-full bg-[#F4F4F5] flex-1 flex flex-col">

         <!-- Hero Section -->
         <section class="min-h-screen w-full flex md:flex-row justify-between items-center lg:px-[120px] md:px-[40px] px-[40px] md:pt-[60px] flex-col pt-[90px] text-center md:text-left md:gap-0 gap-[30px] pb-[60px] md:pb-0">
             <div class="w-full md:max-w-[550px] flex flex-col gap-[20px] items-center md:items-start">
                 <h1 class="md:text-[50px] font-medium md:leading-[65px] text-[32px]" style="font-family: 'IBM Plex Serif', serif;">Barangay Integrated Record and Incident Management System</h1>
                 <p class="md:text-[18px] text-[16px] font-medium text-[#A1A1AA] leading-[27px]">A digital platform designed to simplify and secure the management of barangay resident records, incidents, clearances, and certifications. </p>
                 <a href="#step-section" class="w-[190px] flex items-center pt-[10px] pb-[10px] pl-[20px] pr-[20px] text-white border border-[var(--gray)] fill-white bg-[#EA580C] rounded-[4px] justify-center gap-2 duration-150 ease-in hover:bg-[var(--gray)] hover:text-[#EA580C] hover:fill-[#EA580C] hover:border-[var(--orange)]">
                     <p class="md:text-[20px] font-medium">Get Started</p>
                     <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                         <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                     </svg>
                 </a>
             </div>
             <div class="w-full md:max-w-[550px] max-w-[220px] flex justify-end">
                 <img src="{{asset('svg/hero-svg.svg')}}" alt="Hero Image">
             </div>
         </section>
         <!-- Hero Section -->

         <!-- Steps Section -->
         <section class="min-h-screen w-full bg-white flex flex-col items-center justify-center gap-[30px] lg:pb-[30px] pb-[50px] px-[40px] lg:px-0 text-center lg:pt-0 pt-[30px]" id="step-section">
             <div class="flex flex-col gap-2 justify-center items-center">
                 <h1 style="font-family: 'IBM Plex Serif', serif;" class="md:text-[50px] text-[32px] font-medium">Get Your Documents In Just 3 Easy Steps!</h1>
                 <p class="font-medium md:text-[18px] text-[16px] text-[#A1A1AA]">Access barangay clearances, residency, indigency, and business permits online - fast, convenient, and secure.</p>
             </div>
             <div class="w-full lg:px-35 flex md:flex-row flex-col items-center justify-between gap-[50px] lg:gap-0">
                 <div class="flex w-fit flex-col justify-center items-center ">
                     <img src="{{asset('svg/fill-up.svg')}}" alt="Fill-up Form Photo" class="md:w-[200px] w-[150px]">
                     <h2 class="font-semibold md:text-[16px] text-[14px] mt-4 mb-2">Fill Up The Form</h2>
                     <p class="font-medium md:text-[16px] text-[14px] text-[#A1A1AA] w-full max-w-[200px] text-center">Complete the digital application form after you logged in - anytime, anywhere.</p>
                 </div>
                 <div class="flex flex-col justify-center items-center rotate-90 md:rotate-0">
                     <svg class="lg:h-[4px] md:h-[2px] h-[1.5px]" viewBox="0 0 193 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <line x1="0.994792" y1="2.48402" x2="192.995" y2="1.48402" stroke="#EA580C" stroke-width="2" stroke-dasharray="2 2" />
                     </svg>
                 </div>
                 <div class="flex flex-col justify-center items-center">
                     <img src="{{asset('svg/payment.svg')}}" alt="Payment Photo" class="md:w-[200px] w-[150px]">
                     <h2 class="font-semibold md:text-[16px] text-[14px] mt-4 mb-2">Payment</h2>
                     <p class="font-medium md:text-[16px] text-[14px] text-[#A1A1AA] w-full max-w-[200px] text-center">Pay securely online or at the barangay office. Your request will be processed once payment is confirmed.</p>
                 </div>
                 <div class="flex flex-col justify-center items-center rotate-90 md:rotate-0">
                     <svg class="lg:h-[4px] md:h-[2px] h-[1.5px]" viewBox="0 0 193 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <line x1="0.994792" y1="2.48402" x2="192.995" y2="1.48402" stroke="#EA580C" stroke-width="2" stroke-dasharray="2 2" />
                     </svg>
                 </div>
                 <div class="flex flex-col justify-center items-center">
                     <img src="{{asset('svg/delivery.svg')}}" alt="Delivery Photo" class="md:w-[200px] w-[150px]">
                     <h2 class="font-semibold md:text-[16px] text-[14px] mt-4 mb-2">Delivery</h2>
                     <p class="font-medium md:text-[16px] text-[14px] text-[#A1A1AA] w-full max-w-[200px]  text-center">Get notified once your document is ready for pickup or deliver - simple, fast and reliable,</p>
                 </div>
             </div>
         </section>
         <!-- Steps Section -->

         <!-- Barangay Certificates Section -->
         <section class="min-h-screen w-full flex flex-col items-center justify-center gap-[50px] lg:px-[40px] md:px-[40px] px-[40px] py-8 pb-[80px] md:pt-[60px] lg:pt-[30px] pt-[30px]" id="cards-certificates">
             <div class="flex flex-col gap-2 items-center justify-center">
                 <h1 style="font-family: 'IBM Plex Serif', serif;" class="font-medium md:text-[50px] text-[32px] text-center">Request Your Barangay Certificates Online</h1>
                 <p class="font-medium md:text-[16px] text-[14px] text-[#A1A1AA] md:pl-[200px] md:pr-[200px] text-center 
                  ">Easily apply for your barangay documents - no more long lines! Choose the certificate you need and submit your request in minutes.</p>
             </div>
             <div class="flex md:gap-[100px] flex-col justify-between w-full">
                 <div class="flex md:flex-row flex-col lg:gap-3.5 md:gap-3.5 gap-[50px] justify-between items-center w-full lg:px-[100px]">
                     <div class="certificates">
                         <img src="{{asset('svg/certificates/residency.svg')}}" alt="Barangay Certificate of Residency Photo">
                         <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                             <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate of Residency</h1>
                             <p class="font-normal md:text-[14px] text-[12px] text-[#52525B]">Confirms that you are a resident of Barangay San Bartolome, Quezon City for a specific period.</p>
                             <a href="{{url('signin')}}" class="certificates-btn">Get Certificate</a>
                         </div>
                     </div>
                     <div class="certificates">
                         <img src="{{asset('svg/certificates/indigency.svg')}}" alt="Barangay Certificate of Indigency Photo">
                         <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                             <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate of Indigency </h1>
                             <p class="font-normal md:text-[14px] text-[12px] text-[#52525B]">Issued to residents who need proof of low income for financial assistance or other government aid.</p>
                             <a href="{{url('signin')}}" class="certificates-btn">Get Certificate</a>
                         </div>
                     </div>
                     <div class="certificates">
                         <img src="{{asset('svg/certificates/no-objection.svg')}}" alt="Barangay Certificate of No Objection Photo">
                         <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                             <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate of No Objection</h1>
                             <p class="font-normal md:text-[14px] text-[12px] text-[#52525B]">Official consent from the barangay for activities such as job application, permits, or other valid requests.</p>
                             <a href="{{url('signin')}}" class="certificates-btn">Get Certificate</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="flex md:flex-row flex-col lg:gap-3.5 md:gap-3.5 gap-[50px] justify-between items-center w-full lg:px-[100px]">
                 <div class="certificates">
                     <img src="{{asset('svg/certificates/business.svg')}}" alt="Barangay Certificate for Business Photo">
                     <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                         <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate for Business</h1>
                         <p class="font-normal md:text-[14px] text-[12px] text-[#52525B]">Issued to confirm that a business is operating within the Barangay and complies with local regulations.</p>
                         <a href="{{url('signin')}}" class="certificates-btn">Get Certificate</a>
                     </div>
                 </div>
                 <div class="certificates">
                     <img src="{{asset('svg/certificates/oath-taking.svg')}}" alt="Barangay Certificate of Oath Taking Photo">
                     <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                         <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate of Oath Taking </h1>
                         <p class="font-normal md:text-[14px] text-[12px] text-[#52525B]">A document required to newly elected or appointed barangay officials, certifying their eligibility.</p>
                         <a href="{{url('signin')}}" class="certificates-btn">Get Certificate</a>
                     </div>
                 </div>
                 <div class="certificates">
                     <img src="{{asset('svg/certificates/sedula.svg')}}" alt="Barangay Certificate of Sedula Photo">
                     <div class=" px-[20px] flex flex-col gap-[15px] mt-4">
                         <h1 class="font-semibold md:text-[18px] text-[16px]">Barangay Certificate of Community Tax (Sedula)</h1>
                         <p class="font-normal md:text-[14px] text-[12px] text-[#52525B] ">Official proof for individual that has paid the community tax - commonly used for various legal transactions.</p>
                         <a href="{{url('signin')}}" class="certificates-btn">Get Certificate</a>
                     </div>
                 </div>
             </div>
             </div>
         </section>
         <!-- Barangay Certificates Section -->

         <!-- Blotter Section -->
         <section class="md:min-h-screen h-fit pb-[60px] lg:pb-0 w-full bg-white flex lg:flex-row flex-col-reverse lg:items-center lg:justify-center md:justify-center justify-end pt-[30px] md:pt-0 lg:px-[150px] md:pb-[40px] 
        px-[40px] lg:gap-0 md:gap-[70px] gap-[50px]" id="blotter">
             <div class="w-full flex justify-center">
                 <img src="{{asset('svg/blotter-svg.svg')}}" class="lg:w-[510px] md:w-[400px] w-[350px]" alt="Blotter">

             </div>
             <div class="flex flex-col gap-6 lg:pl-20 lg:max-w-[550px] w-full items-center lg:items-start">
                 <h1 style="font-family: var(--font-ibm-plex-serif);" class="font-medium md:text-[50px] text-[32px] md:leading-[65px] text-center lg:text-left ">Need To File For a Blotter</h1>
                 <p class="font-medium md:text-[18px] text-[16px] text-[#A1A1AA] text-center lg:text-left">Report incidents, disputes, or complaints directly to Barangay San Bartolome. Submit your blotter details online and let our team assist you promptly. </p>
                 <a href="#" class="md:max-w-[190px] max-w-[170px] w-full flex items-center pt-[10px] pb-[10px] pl-[20px] pr-[20px] bg-[#EA580C] text-white fill-white rounded-[4px] justify-center gap-2 border duration-150 ease-in border-white hover:fill-[var(--orange)] hover:bg-white hover:border-[var(--orange)] hover:text-[var(--orange)]">
                     <p class="md:text-[18px] text-[16px] font-medium">Report Now</p>
                     <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                         <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                     </svg>
                 </a>
             </div>
         </section>
         <!-- Blotter Section -->

         <!-- FAQ Section -->
         <section class="lg:h-screen min-h-screen w-full flex md:flex-row pt-[30px] md:pt-0 flex-col items-center justify-center pb-[80px] md:gap-0 gap-[30px] px-[40px] lg:px-0" id="contact-us">
             <div class="w-full lg:max-w-[600px] flex flex-col md:gap-6 gap-3 justify-center items-center lg:items-start lg:px-20">
                 <h1 class="font-medium md:text-[50px] text-[32px] md:leading-[65px] text-center md:text-left" style="font-family: var(--font-ibm-plex-serif);">Frequently Asked Questions</h1>
                 <div class="w-full ">
                     <p class="font-medium md:text-[18px] text-[16px] text-center md:text-left text-[#A1A1AA] ">If you have any question or concern, you can contact us in <a href="" class="w-full text-[var(--orange)] duration-150 ease-in hover:underline md:text-[18px] text-[16px] block truncate">birims.sanbartolome@gmail.com</a> and we will quickly response at you! You can also contact us in different platforms just by clicking Contact Us below.</p>
                 </div>
                 <div class="w-full flex justify-center md:justify-start">
                     <a href="{{url('contact')}}" class="max-w-[190px] flex items-center pt-[10px] pb-[10px] pl-[20px] pr-[20px] bg-[#EA580C] rounded-[4px] justify-center gap-2 text-white fill-white border duration-150 ease-in border-white hover:bg-[var(--gray)] hover:text-[var(--orange)] hover:fill-[var(--orange)] hover:border-[var(--orange)]">
                         <p class="md:text-[18px] text-[16px] font-medium">Contact Us</p>
                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                             <path d="M647-440H160v-80h487L423-744l57-56 320 320-320 320-57-56 224-224Z" />
                         </svg>
                     </a>
                 </div>
             </div>
             <div class="w-full lg:max-w-[600px] flex flex-col gap-6 justify-center items-center lg:px-10">
                 <ul class="w-full lg:max-w-[600px] h-full md:mt-[100px]">
                     <li class="md:p-[16px] py-[16px]">
                         <label for="first" class="faq-details">How do i request for my barangay documents?</label>
                         <input type="radio" name="accordion" id="first" class="hidden" checked class="bg-amber-300">
                         <div class="content">
                             <p class="faq-summary">You can request barangay documents by visiting the Barangay Hall or through our online portal. Fill out the request form, provide valid identification, and indicate the document type you need.</p>
                         </div>
                     </li>
                     <hr class="text-[#E4E4E7]">
                     <li class="md:p-[16px] py-[16px]">
                         <label for="second" class="faq-details">What are the requirements to request for my documents?</label>
                         <input type="radio" name="accordion" id="second" class="hidden">
                         <div class="content">
                             <p class="faq-summary">You’ll need a valid government-issued ID, proof of residency, and in some cases, supporting documents depending on the type of clearance or certificate you’re requesting.</p>
                         </div>
                     </li>
                     <hr class="text-[#E4E4E7]">
                     <li class="md:p-[16px] py-[16px]">
                         <label for="third" class="faq-details">What are the types of documents i can request for?</label>
                         <input type="radio" name="accordion" id="third" class="hidden">
                         <div class="content">
                             <p class="faq-summary">The types of documents that you can request are: Barangay Clearance, Business Clearance, Cedula, Oath Taking Certificate and Certificate of Residence, Indigency or Good Moral Character.</p>
                         </div>
                     </li>
                     <hr class="text-[#E4E4E7]">
                     <li class="md:p-[16px] py-[16px]">
                         <label for="fourth" class="faq-details">Do i need to pay for a fee to deliver my documents?</label>
                         <input type="radio" name="accordion" id="fourth" class="hidden">
                         <div class="content">
                             <p class="faq-summary">Yes, minimal processing or delivery fees may apply depending on your document type and delivery option.</p>
                         </div>
                     </li>
                     <hr class="text-[#E4E4E7]">
                     <li class="md:p-[16px] py-[16px]">
                         <label for="fifth" class="faq-details">Does (company name) support delivery services?</label>
                         <input type="radio" name="accordion" id="fifth" class="hidden">
                         <div class="content">
                             <p class="faq-summary">Yes. We offer door-to-door document delivery through our barangay’s partnered courier service for added convenience.</p>
                         </div>
                     </li>
                     <hr class="text-[#E4E4E7]">
                 </ul>
             </div>
         </section>
         <!-- FAQ Section -->

         <!-- Create Account Section -->
         <section class="min-h-screen md:h-full w-full bg-white relative px-[40px] pb-[100px]" style="height: calc(100vh - 80px);" id="create-account">
             <svg viewBox="0 0 328 316" fill="none" xmlns="http://www.w3.org/2000/svg" class="left-0 absolute md:top-0 z-0 top-0 md:h-[300px] h-[200px]">
                 <path d="M0 265.498V0H160.263V106.199C160.263 127.118 156.118 147.833 148.064 167.16C140.01 186.487 128.205 204.048 113.323 218.84C83.2681 248.715 42.5045 265.498 0 265.498H0Z" fill="#EA580C" />
                 <path d="M213.161 100.775C225.123 100.775 234.821 91.136 234.821 79.2458C234.821 67.3555 225.123 57.7166 213.161 57.7166C201.199 57.7166 191.501 67.3555 191.501 79.2458C191.501 91.136 201.199 100.775 213.161 100.775Z" fill="#FFEDD5" />
                 <path d="M213.161 207.781C225.123 207.781 234.821 198.142 234.821 186.252C234.821 174.362 225.123 164.723 213.161 164.723C201.199 164.723 191.501 174.362 191.501 186.252C191.501 198.142 201.199 207.781 213.161 207.781Z" fill="#FB923C" />
             </svg>
             <svg viewBox="0 0 185 185" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 right-0 md:w-[230px] w-[150px] z-[0]">
                 <g clip-path="url(#clip0_58_1146)">
                     <path d="M185 65.366H65.3661V185H185V65.366Z" fill="#FDBA74" />
                     <path d="M125.184 5.55005H5.55005V125.184H125.184V5.55005Z" stroke="#111111" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                 </g>
                 <defs>
                     <clipPath id="clip0_58_1146">
                         <rect width="185" height="185" fill="white" />
                     </clipPath>
                 </defs>
             </svg>
             <div class="w-full h-full flex flex-col gap-[10px] justify-center items-center md:px-[150px] text-center">
                 <div class="w-full flex flex-col items-center">
                     <h1 class="z-10 relative md:text-[54px] text-[40px] font-medium w-full underline decoration-[var(--orange)] decoration-9 underline-offset-[1px]" style="font-family: --font-ibm-plex-serif;">Create Your Account Now</h1>
                 </div>
                 <p class="md:text-[18px] text-[14px] text-[#A1A1AA] font-medium">So what are you waiting for? Request now your first online barangay document by signing in or creating your account!</p>
                 <div class="flex md:gap-12 gap-6 mt-4 md:flex-row flex-col">
                     <a href="{{ url('signup')}}" class="md:text-[18px] text-[16px] text-white font-medium px-[20px] py-[10px] bg-[#EA580C] rounded-[4px] duration-150 ease-in border border-[#EA580C] hover:bg-white hover:text-[var(--orange)]">Create Account</a>
                     <a href="{{ url('signin')}}" class="md:text-[18px] text-[16px] text-[#EA580C] font-medium px-[20px] py-[10px] bg-white rounded-[4px] border duration-150 ease-in border-[#e6c6b5] hover:bg-[var(--orange)] hover:text-white">Sign in To Account</a>
                 </div>
             </div>
         </section>
         <!-- Create Account Section -->

     </main>

     <!-- Footer Section -->
      <footer class="md:max-h-[230px] h-[200px] w-full flex-col md:flex-row flex justify-between items-center px-[20px] lg:px-20 md:px-[20px] pt-[30px] md:py-0 text-center md:text-left">
    <div class="pb-[10px] md:pb-0 w-full md:block md:truncate">
        <div class="flex items-center gap-2.5 mb-4 justify-center md:justify-start">
            <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="md:h-[50px] h-[40px]">
                <circle cx="25" cy="25" r="25" fill="#EA580C"/>
            </svg>
            <h1 class="font-medium font md:text-[30px] text-[24px] text-[#EA580C]">BIRIMS</h1>
        </div>
        <div class="w-full flex flex-col gap-[10px]">
            <div class="w-full flex stroke-[var(--darkgray)] items-center gap-[10px] justify-center md:justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-8 md:size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                <p class="w-fit block truncate font-medium text-[#A1A1AA] text-[12px]">Quirino Hwy, Novaliches, Quezon City, Metro Manila, Philippines</p>
            </div>
            <div class="w-full flex stroke-[var(--darkgray)] items-center gap-[10px] justify-center md:justify-start">
                <svg fill="var(--darkgray)" class="size-5" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                    <path d="m1416.013 791.915-30.91 225.617h-371.252v789.66H788.234v-789.66H449.808V791.915h338.426V585.137c0-286.871 176.207-472.329 449.09-472.329 116.87 0 189.744 6.205 231.822 11.845l-3.272 213.66-173.5.338c-4.737-.451-117.771-9.25-199.332 65.655-52.568 48.169-79.191 117.433-79.191 205.65v181.96h402.162Zm-247.276-304.018c44.446-41.401 113.71-36.889 118.787-36.663l289.467-.113 6.204-417.504-43.544-10.717C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l61.932-451.233H1126.66v-69.152c0-54.937 14.214-96 42.078-122.058Z" fill-rule="evenodd"/>
                </svg>
                <p class="w-fit block truncate font-medium text-[#A1A1AA] text-[12px]">www.facebook.com/brgysanbartolome2014</p>
            </div>
            <div class="w-full flex stroke-[var(--darkgray)] items-center gap-[10px] justify-center md:justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <p class="w-fit block truncate font-medium text-[#A1A1AA] text-[12px]">birim.sanbartolome@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="w-full flex flex-col md:flex-row justify-end lg:gap-[70px] md:gap-[30px] gap-[20px] pb-[20px] md:pb-0">
        <div class="flex flex-col gap-[5px]">
            <h2 class="font-medium md:text-[18px] text-[16px]">Services</h2>
            <ul class="flex flex-col gap-[5px]">
                <li><a href="{{url('signin')}}" class="footer-nav">Blotter</a></li>
                <li><a href="{{url('signin')}}" class="footer-nav">Documents</a></li> 
                <li><a href="{{url('signin')}}" class="footer-nav">Appointment</a></li>
                <li><a href="{{url('signin')}}" class="footer-nav">Announcement</a></li>
            </ul>
        </div>
        <div class="flex flex-col gap-[5px]">
            <h2 class="font-mediummd:text-[18px] text-[16px]">Navigation</h2>
            <ul class="flex flex-col gap-[5px]">
                <li><a href="{{url('/')}}" class="footer-nav {{request()-> is('/') ? 'active-footer' : ''}}">Home</a></li>
                <li><a href="{{url('about')}}" class="footer-nav {{request()-> is('about') ? 'active-footer' : ''}}">About</a></li>
                <li><a href="{{url('contact')}}" class="footer-nav {{request()-> is('contact') ? 'active-footer' : ''}}">Contact</a></li>
                <li><a href="{{url('signin')}}" class="footer-nav">Sign In</a></li>
            </ul>
        </div>
        <div class="flex flex-col gap-[5px]">
            <h2 class="font-medium md:text-[18px] text-[16px]">Resources</h2>
            <ul class="flex flex-col gap-[5px]">
                <li><a href="{{url('faq')}}" class="footer-nav {{request()-> is('faq') ? 'active-footer' : ''}}">FAQs</a></li>
                <li><a href="{{url('terms')}}" class="footer-nav {{request()-> is('terms') ? 'active-footer' : ''}}">Terms</a></li>
                <li><a href="{{url('privacy')}}" class="footer-nav {{request()-> is('privacy') ? 'active-footer' : ''}}">Privacy Policy</a></li>
                <li><a href="{{url('signup')}}" class="footer-nav">Sign Up</a></li>
            </ul>
        </div>
    </div>
</footer>
     <!-- Footer Section -->

 </body>

 </html>