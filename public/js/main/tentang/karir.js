let currentPage = 1;

            function goToPage(page) {
                if (page < 1 || page > 4) return;

                hideAllItems();

                showPageItems(page);

                updateButtons(page);

                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });

                currentPage = page;
            }

            function hideAllItems() {
                document.querySelectorAll('.page-1, .page-2, .page-3, .page-4').forEach(item => {
                    item.style.display = 'none';
                });
            }

            function showPageItems(page) {
                const pageItems = document.querySelectorAll('.page-' + page);
                pageItems.forEach(item => {
                    item.style.display = 'block';
                });
            }

            function updateButtons(page) {
                document.querySelectorAll('.pagination button').forEach(btn => {
                    btn.classList.remove('active');
                });

                document.getElementById('page' + page).classList.add('active');

                document.getElementById('prevBtn').disabled = (page === 1);
                document.getElementById('nextBtn').disabled = (page === 4);
            }

            document.addEventListener('DOMContentLoaded', function() {
                goToPage(1);
            });