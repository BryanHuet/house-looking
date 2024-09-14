// Show loader before sending AJAX request
function showLoader() {
    $("#dataLoader").show();  // Show the loader
}

// Hide loader after receiving AJAX response
function hideLoader() {
    $("#dataLoader").hide();  // Hide the loader
}

async function fetchCards() {
    showLoader();
    try {
        const response = await fetch('/home/getAll');
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const data = await response.json();
        const cards = data.data;
        renderCards(cards);
        setupCardInteractions(cards);
    } catch (error) {
        console.error('Failed to load card data:', error);
    } finally {
        hideLoader();
    }
}

function renderCards(cards) {
    $("#cardContainer").empty();
    cards.forEach(card => {
        $("#cardContainer").append(`
            <div class="col-md-4 mb-4">
                <div class="card" data-id="${card.id}">
                    <div class="card-body">
                        <h5 class="card-title">${card.title}</h5>
                        <h6 class="card-subtitle">${card.address}</h6>

                        <p class="card-text">`+ Intl.NumberFormat('fr-FR').format(card.price) + ` €</p>
                        <a href="${card.link}" class="btn btn-primary"><i class="bi bi-box-arrow-up-right"></i></a>

                    </div>
                </div>
            </div>
        `);
    });
}

function setupCardInteractions(cards) {
    
    let currentCardId;

    $(document).on("click", ".card", function() {
        currentCardId = $(this).data("id");
        const card = cards.find(c => c.id === currentCardId);
        $("#editTitle").val(card.title);
        $("#editDescription").val(card.description);
        $(".edit-form-container").css("display", "flex");
        setTimeout(() => {
            $(".edit-form").addClass("show");
        }, 50);
    });

    $("#editForm").on("submit", function(e) {
        e.preventDefault();
        const card = cards.find(c => c.id === currentCardId);
        card.title = $("#editTitle").val();
        card.description = $("#editDescription").val();
        renderCards(cards);  // Update the cards with the edited data
        closeEditForm();
    });

    $("#cancelEdit").on("click", closeEditForm);

    function closeEditForm() {
        $(".edit-form").removeClass("show");
        setTimeout(() => {
            $(".edit-form-container").css("display", "none");
        }, 300);
    }

    $(document).on("click", ".edit-form-container", function(e) {
        if (e.target === this) {
            closeEditForm();
        }
    });
}

// Call the function when the document is ready
$(document).ready(fetchCards);