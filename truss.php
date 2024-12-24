<?php
// truss.php
?>
<svg viewBox="0 0 600 400" class="w-full">
    <!-- Frame members -->
    <g stroke-width="3">
        <!-- Horizontal members -->
        <line x1="100" y1="100" x2="300" y2="100" stroke="#000" class="member" data-id="FE" />
        <line x1="300" y1="100" x2="500" y2="100" stroke="#000" class="member" data-id="ED" />
        <line x1="100" y1="300" x2="300" y2="300" stroke="#000" class="member" data-id="AB" />
        <line x1="300" y1="300" x2="500" y2="300" stroke="#000" class="member" data-id="BC" />
        
        <!-- Vertical members -->
        <line x1="100" y1="100" x2="100" y2="300" stroke="#000" class="member" data-id="FA" />
        <line x1="300" y1="100" x2="300" y2="300" stroke="#000" class="member" data-id="BE" />
        <line x1="500" y1="100" x2="500" y2="300" stroke="#000" class="member" data-id="DC" />
        
        <!-- Diagonal members -->
        <line x1="100" y1="300" x2="300" y2="100" stroke="#000" class="member" data-id="AE" />
        <line x1="300" y1="300" x2="500" y2="100" stroke="#000" class="member" data-id="CE" />
    </g>

    <!-- Joints -->
    <g>
        <circle cx="100" cy="300" r="5" fill="#333" />
        <circle cx="300" cy="300" r="5" fill="#333" />
        <circle cx="500" cy="300" r="5" fill="#333" />
        <circle cx="500" cy="100" r="5" fill="#333" />
        <circle cx="300" cy="100" r="5" fill="#333" />
        <circle cx="100" cy="100" r="5" fill="#333" />
        
        <!-- Labels -->
        <text x="80" y="290" font-size="16" text-anchor="middle">A</text>
        <text x="300" y="290" font-size="16" text-anchor="middle">B</text>
        <text x="520" y="290" font-size="16" text-anchor="middle">C</text>
        <text x="520" y="110" font-size="16" text-anchor="middle">D</text>
        <text x="300" y="90" font-size="16" text-anchor="middle">E</text>
        <text x="80" y="110" font-size="16" text-anchor="middle">F</text>
    </g>

    <!-- Support symbols -->
    <g stroke="#000" stroke-width="2">
        <!-- Pin support at A -->
        <path d="M85,305 L115,305 L100,325 Z" fill="white" />
        <line x1="75" y1="325" x2="125" y2="325" />
        <line x1="80" y1="330" x2="120" y2="330" />
        <line x1="85" y1="335" x2="115" y2="335" />
        
        <!-- Roller support at C -->
        <path d="M485,305 L515,305 L500,325 Z" fill="white" />
        <line x1="485" y1="325" x2="515" y2="325" />
        <circle cx="493" cy="332" r="4" fill="white" />
        <circle cx="507" cy="332" r="4" fill="white" />
    </g>

    <!-- Forces -->
    <g stroke="#FF0000" stroke-width="2">
        <!-- P1 force -->
        <line x1="50" y1="100" x2="90" y2="100" />
        <path d="M80,95 L90,100 L80,105" fill="none" />
        <text x="55" y="95" font-size="14" fill="#FF0000">P₁</text>
        
        <!-- P2 force -->
        <line x1="300" y1="305" x2="300" y2="345" />
        <path d="M295,335 L300,345 L305,335" fill="none" />
        <text x="285" y="325" font-size="14" fill="#FF0000">P₂</text>
    </g>

    <!-- Dimensions -->
    <g stroke="#666" stroke-width="1" stroke-dasharray="5,5">
        <line x1="100" y1="350" x2="300" y2="350" />
        <line x1="300" y1="350" x2="500" y2="350" />
        <text x="200" y="370" font-size="14">3 m</text>
        <text x="400" y="370" font-size="14">3 m</text>
        
        <line x1="50" y1="100" x2="50" y2="300" />
        <text x="30" y="200" font-size="14">4 m</text>
    </g>
</svg>