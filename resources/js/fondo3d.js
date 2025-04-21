import * as THREE from 'three';
import NET from 'vanta/src/vanta.net';

document.addEventListener("DOMContentLoaded", function () {
    NET({
        el: "#fondo3d",
        THREE: THREE,
        mouseControls: true,
        touchControls: true,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.0,
        scaleMobile: 1.0,
        color: 0xffc300,
        backgroundColor: 0x1b1b1b,
        points: 12.0,
        maxDistance: 25.0,
        spacing: 20.0
    });
});