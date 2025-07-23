document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const form = e.target;
        const submitBtn = document.getElementById('submitBtn');
        const notification = document.getElementById('notification');

        submitBtn.disabled = true;
        notification.innerHTML = '';

        const formData = new FormData(form);

        fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
                },
                body: formData
            })
            .then(response => {
                if (!response.ok) throw response;
                return response.json();
            })
            .then(data => {
                notification.innerHTML =
                    `<div class="alert alert-success mt-3 fade show" role="alert">${data.message}</div>`;
                form.reset();
                submitBtn.disabled = false;

                setTimeout(() => {
                    const alert = notification.querySelector('.alert');
                    if (alert) {
                        alert.classList.remove('show');
                        alert.classList.add('fade');
                        setTimeout(() => {
                            notification.innerHTML = '';
                        }, 150);
                    }
                }, 3000);
            })
            .catch(async (error) => {
                let errorText = '<div class="alert alert-danger mt-3 fade show" role="alert"><ul>';
                if (error.json) {
                    const errData = await error.json();
                    if (errData.errors) {
                        for (const key in errData.errors) {
                            errorText += `<li>${errData.errors[key][0]}</li>`;
                        }
                    } else {
                        errorText += `<li>Terjadi kesalahan.</li>`;
                    }
                } else {
                    errorText += `<li>Terjadi kesalahan.</li>`;
                }
                errorText += '</ul></div>';
                notification.innerHTML = errorText;
                submitBtn.disabled = false;

                setTimeout(() => {
                    const alert = notification.querySelector('.alert');
                    if (alert) {
                        alert.classList.remove('show');
                        alert.classList.add('fade');
                        setTimeout(() => {
                            notification.innerHTML = '';
                        }, 150);
                    }
                }, 3000);
            });
    });