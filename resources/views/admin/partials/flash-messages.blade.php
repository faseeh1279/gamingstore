<div class="toast-container">
    @if(session('success'))
        <div class="custom-toast toast-success auto-dismiss">
            <div class="toast-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            </div>
            <div class="toast-message">
                {{ session('success') }}
            </div>
            <button type="button" class="toast-close" onclick="dismissToast(this)">&times;</button>
        </div>
    @endif

    @if(session('error'))
        <div class="custom-toast toast-danger auto-dismiss">
            <div class="toast-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            </div>
            <div class="toast-message">
                {{ session('error') }}
            </div>
            <button type="button" class="toast-close" onclick="dismissToast(this)">&times;</button>
        </div>
    @endif
</div>