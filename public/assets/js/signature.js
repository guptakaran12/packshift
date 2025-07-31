document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.getElementById('signature-pad');
    if (!canvas) return; // exit if no canvas found

    const signaturePad = new SignaturePad(canvas, {
        minWidth: 1,
        maxWidth: 2.5,
        penColor: "black",
        throttle: 16,
        minDistance: 3
    });

    // Resize canvas for mobile/desktop
    function resizeCanvas() {
        const ratio = Math.max(window.devicePixelRatio || 1, 1);
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
        signaturePad.clear();
    }

    window.addEventListener("resize", resizeCanvas);
    resizeCanvas();

    // Clear button
    const clearBtn = document.getElementById('clear-signature');
    if (clearBtn) {
        clearBtn.addEventListener('click', () => {
            signaturePad.clear();
            document.getElementById('signature_data').value = '';
        });
    }

    // Save on form submit
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function (e) {
            if (signaturePad.isEmpty()) {
                e.preventDefault();
                document.getElementById('signature_error').textContent = "Please provide your signature.";
            } else {
                document.getElementById('signature_error').textContent = "";
                document.getElementById('signature_data').value = signaturePad.toDataURL("image/png");
            }
        });
    }
});
