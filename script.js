// script.js
document.addEventListener('DOMContentLoaded', function() {
    const zeroForceMembers = ['FA'];
    const selectedMembers = new Set();
    const messageDiv = document.getElementById('message');
    const selectedCountSpan = document.getElementById('selected-count');
    
    // Add click handlers to all members
    document.querySelectorAll('.member').forEach(member => {
        member.style.cursor = 'pointer';
        member.addEventListener('click', function() {
            const memberId = this.dataset.id;
            
            if (selectedMembers.has(memberId)) {
                // Unselect member
                selectedMembers.delete(memberId);
                this.setAttribute('stroke', '#000000');
                messageDiv.classList.add('hidden');
            } else {
                if (zeroForceMembers.includes(memberId)) {
                    // Correct selection
                    selectedMembers.add(memberId);
                    this.setAttribute('stroke', '#4CAF50');
                    showMessage(`صحيح! ${memberId} هو zero force member`, 'success');
                    
                    if (selectedMembers.size === zeroForceMembers.length) {
                        celebrate();
                    }
                } else {
                    // Wrong selection
                    this.setAttribute('stroke', '#FF0000');
                    showMessage(`خطأ! ${memberId} ليس zero force member. حاول مرة أخرى`, 'error');
                    setTimeout(() => {
                        this.setAttribute('stroke', '#000000');
                    }, 1000);
                }
            }
            
            selectedCountSpan.textContent = selectedMembers.size;
        });
    });
    
    function showMessage(text, type) {
        messageDiv.textContent = text;
        messageDiv.className = 'mt-4 p-4 rounded-lg ' + 
            (type === 'success' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700');
        messageDiv.classList.remove('hidden');
    }
    
    function celebrate() {
        // Create confetti effect
        for (let i = 0; i < 50; i++) {
            const confetti = document.createElement('div');
            confetti.className = 'confetti-piece';
            confetti.style.left = Math.random() * 100 + '%';
            confetti.style.backgroundColor = ['#ff0000', '#00ff00', '#0000ff', '#ffff00', '#ff00ff', '#00ffff'][Math.floor(Math.random() * 6)];
            confetti.style.animationDuration = (1 + Math.random() * 2) + 's';
            document.body.appendChild(confetti);
            
            setTimeout(() => {
                confetti.remove();
            }, 3000);
        }
        
        showMessage('أحسنت! لقد حددت جميع الـ zero force members بشكل صحيح', 'success');
    }
});