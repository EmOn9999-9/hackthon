<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=6555565, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<label class="cursor-pointer relative block text-[16px] mt-[1.75em]">
  <input type="checkbox" class="hidden" />
  <div class="w-[10.625em] h-[5.625em] bg-gradient-to-b from-[#2c4770] via-[#070e2b_35%] via-[#628cac_50%_70%] to-[#a6c5d4] bg-[length:100%_11.25em] bg-[-5.625em] rounded-full transition-all duration-400 relative">
    <!-- Scenery -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden rounded-full">
      <div class="absolute w-full h-[30%] bottom-0 bg-[#b18d71] z-10"></div>
      <!-- Clouds -->
      <div class="absolute w-[0.875em] h-[0.625em] rounded-full blur-[0.125em] right-[1.875em] top-[2.813em] bg-gradient-to-tr from-[#ffffffae] to-[#ffffffae] shadow-[0.313em_0.313em_#ffffffae,-0.625em_0_#fff,-0.938em_-0.125em_#fff] transition-all duration-400"></div>
      <div class="absolute w-[0.875em] h-[0.375em] rounded-full bg-[#dfdedeae] blur-[0.125em] right-[4.375em] top-[0.625em] shadow-[-0.313em_-0.188em_#e0dfdfae,-0.625em_-0.188em_#bbbbbbae,-1em_0.063em_#cfcfcfae] transition-all duration-600"></div>
      <div class="absolute w-[0.875em] h-[0.375em] rounded-full bg-[#ffffffae] blur-[0.125em] right-[0.938em] top-[1.25em] shadow-[0.438em_0.188em_#ffffffae,-0.625em_0.313em_#ffffffae] transition-all duration-800"></div>
      <!-- Stars -->
      <div class="absolute w-[0.063em] h-[0.063em] bg-white rounded-full shadow-[1.25em_0.938em,-1.25em_2.5em,0_1.25em,1.875em_0.625em,-3.125em_1.875em,1.25em_2.813em] left-[3.75em] transition-all duration-200"></div>
      <div class="absolute w-[0.063em] h-[0.063em] bg-white rounded-full shadow-[0.625em_0,0_0.625em,-0.625em_-0.625em,0.625em_0.938em,-3.125em_1.25em,1.25em_-1.563em] left-[4.688em] transition-all duration-300"></div>
      <div class="absolute w-[0.063em] h-[0.063em] bg-white rounded-full shadow-[-0.625em_-0.625em,-2.188em_1.25em,-2.188em_0,-3.75em_-0.625em,-3.125em_-0.625em,-2.5em_-0.313em,0.75em_-0.625em] left-[5.313em] transition-all duration-400"></div>
      <div class="absolute w-[0.125em] h-[0.125em] bg-white rounded-full left-[1.875em] transition-all duration-500"></div>
      <div class="absolute w-[0.125em] h-[0.125em] bg-white rounded-full left-[5em] transition-all duration-600"></div>
      <div class="absolute w-[0.125em] h-[0.125em] bg-white rounded-full left-[2.5em] transition-all duration-700"></div>
      <div class="absolute w-[0.125em] h-[0.125em] bg-white rounded-full left-[3.438em] transition-all duration-800"></div>
    </div>
    <!-- BB-8 -->
    <div class="absolute flex flex-col items-center top-[calc((5.625em-4.375em)/2-1.688em+0.188em)] left-[calc((5.625em-4.375em)/2)] transition-all duration-400 z-10">
      <div class="relative transition-all duration-400 origin-[1.25em_3.75em] z-10">
        <div class="w-[2.5em] h-[1.688em] bg-gradient-to-b from-transparent via-dimgray to-transparent rounded-t-full relative overflow-hidden mb-[-0.188em]"></div>
        <div class="absolute w-[0.563em] h-[0.563em] bg-radial-gradient(circle_at_0.25em_0.375em,red,transparent) bg-radial-gradient(circle_at_0.375em_0.188em,white,transparent) bg-gradient-to-br from-black via-dimgray to-black rounded-full top-[0.413em] left-1/2 transform -translate-x-1/2 shadow-[0_0_0_0.089em_lightgray,0.563em_0.281em_0_-0.148em,0.563em_0.281em_0_-0.1em_white,0.563em_0.281em_0_-0.063em] transition-all duration-400"></div>
        <div class="absolute w-full h-[0.188em] bottom-[0.375em] left-0 bg-gradient-to-r from-[var(--accent)] via-transparent to-[var(--accent)] transition-all duration-400"></div>
      </div>
      <div class="w-[4.375em] h-[4.375em] bg-white rounded-full relative overflow-hidden transition-all duration-400 transform rotate-45 z-10"></div>
    </div>
    <!-- Shadow -->
    <div class="absolute w-[4.375em] h-[20%] bg-[#3a271c] rounded-full shadow-[0.313em_0_3.125em_#3a271c] opacity-25 bottom-0 left-[calc((5.625em-4.375em)/2-0.938em)] transition-all duration-400 transform skew-x-[-70deg] z-10"></div>
  </div>
</label>

<style>
  .bb8-toggle__container {
    background: linear-gradient(#2c4770, #070e2b 35%, #628cac 50% 70%, #a6c5d4);
  }
  .bb8__head {
    background: linear-gradient(
      transparent 0.063em,
      dimgray 0.063em 0.313em,
      transparent 0.313em 0.375em,
      var(--accent) 0.375em 0.5em,
      transparent 0.5em 1.313em,
      silver 1.313em 1.438em,
      transparent 1.438em
    ),
    linear-gradient(
      45deg,
      transparent 0.188em,
      var(--bb8-bg) 0.188em 1.25em,
      transparent 1.25em
    ),
    linear-gradient(
      -45deg,
      transparent 0.188em,
      var(--bb8-bg) 0.188em 1.25em,
      transparent 1.25em
    ),
    linear-gradient(var(--bb8-bg) 1.25em, transparent 1.25em);
  }
  .bb8__head::before {
    background: radial-gradient(
      0.125em circle at 0.25em 0.375em,
      red,
      transparent
    ),
    radial-gradient(
      0.063em circle at 0.375em 0.188em,
      var(--bb8-bg) 50%,
      transparent 100%
    ),
    linear-gradient(45deg, #000 0.188em, dimgray 0.313em 0.375em, #000 0.5em);
  }
  .bb8__head::after {
    background: linear-gradient(
      to right,
      var(--accent) 0.125em,
      transparent 0.125em 0.188em,
      var(--accent) 0.188em 0.313em,
      transparent 0.313em 0.375em,
      var(--accent) 0.375em 0.938em,
      transparent 0.938em 1em,
      var(--accent) 1em 1.125em,
      transparent 1.125em 1.875em,
      var(--accent) 1.875em 2em,
      transparent 2em 2.063em,
      var(--accent) 2.063em 2.25em,
      transparent 2.25em 2.313em,
      var(--accent) 2.313em 2.375em,
      transparent 2.375em 2.438em,
      var(--accent) 2.438em
    );
  }
</style>
</body>
</html>