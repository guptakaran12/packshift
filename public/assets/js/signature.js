window.signaturePad = null;

document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.getElementById('signature-pad');
    if (!canvas) return;

    window.signaturePad = new SignaturePad(canvas, {
        minWidth: 1,
        maxWidth: 2.5,
        penColor: "black",
        throttle: 16,
        minDistance: 3
    });

    function resizeCanvas() {
        const ratio = Math.max(window.devicePixelRatio || 1, 1);
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
        window.signaturePad.clear();// Optional
    }

    window.addEventListener("resize", resizeCanvas);
    resizeCanvas();

    // Clear button
    const clearBtn = document.getElementById('clear_signature');
    if (clearBtn) {
        clearBtn.addEventListener('click', () => {
            window.signaturePad.clear();
            document.getElementById('signature_data').value = '';
        });
    }

    // Optional for normal submit
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function (e) {
            if (window.signaturePad && !window.signaturePad.isEmpty()) {
                document.getElementById('signature_data').value = window.signaturePad.toDataURL("image/png");
            }
        });
    }
});
