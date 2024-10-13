<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Noto+Sans:wght@400;500;700;900&display=swap"
    >
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  </head>
  <body>
  <div class="relative flex size-full min-h-screen flex-col bg-[#f8fbfa] group/design-root overflow-x-hidden" style='font-family: Manrope, "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
        <header class="flex flex-col sm:flex-row items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e8f3ec] px-4 sm:px-10 py-3">
            <div class="flex items-center w-full sm:w-auto justify-between">
                <img src="{{ asset('asset/images/logo4.jpg') }}" alt="Logo" class="h-8 w-auto">
                <button class="sm:hidden text-[#0e1b13]" id="menuToggle">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <nav class="hidden sm:flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-6 w-full sm:w-auto" id="navMenu">
                <a href="#" class="text-[#0e1b13] hover:text-[#50956d]">Course List</a>
                <a href="{{ route('subscription.choose') }}" class="text-[#0e1b13] hover:text-[#50956d]">Upgrade Subscription</a>
                <a href="{{ route('login') }}" class="text-[#0e1b13] hover:text-[#50956d]">Logout</a>
            </nav>
        </header>
        <div class="px-40 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                <div class="zoom-classes mb-4 w-full lg:w-[300px] lg:fixed lg:right-4 lg:top-[calc(50%_-_200px)] p-4 bg-[#e8f3ec] shadow-lg rounded-xl overflow-y-auto max-h-[400px]">
                    <h3 class="text-[#0e1b13] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Zoom Classes</h3>
                    <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
                        @forelse($zoomClasses as $class)
                        <div class="flex flex-col gap-3 pb-3">
                            <div>
                                <p class="text-[#0e1b13] text-base font-medium leading-normal">{{ $class->title }}</p>
                                <p class="text-[#50956d] text-sm font-normal leading-normal">Schedule: {{ $class->schedule }}</p>
                                <button class="mt-2 inline-flex items-center justify-center rounded-md border border-transparent bg-[#50956d] px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-[#40794f] focus:outline-none">
                                    Join Zoom
                                </button>
                            </div>
                        </div>
                        @empty
                        <p class="text-[#50956d] text-sm font-normal leading-normal">No zoom schedule today</p>
                        @endforelse
                    </div>
                </div>
                <div class="flex flex-wrap justify-between gap-3 p-4">
                    <div class="flex min-w-72 flex-col gap-3 border-4 rounded-lg p-4 subscription-box
                        @if($user->subscription->level == 3)
                            border-platinum
                        @elseif($user->subscription->level == 2)
                            border-gold
                        @elseif($user->subscription->level == 1)
                            border-silver
                        @else
                            border-gray-300
                        @endif
                    ">
                        <p class="text-[#0e1b13] tracking-light text-[32px] font-bold leading-tight">Your Subscription</p>
                        <p class="text-[#50956d] text-sm font-normal leading-normal">Get access to all courses, workshops, and live events. Courses never expire.</p>
                        <p class="text-[#0e1b13] text-lg font-semibold">
                            Level: 
                            <span class="
                                @if($user->subscription->level == 3)
                                    text-platinum
                                @elseif($user->subscription->level == 2)
                                    text-gold
                                @elseif($user->subscription->level == 1)
                                    text-silver
                                @else
                                    text-gray-500
                                @endif
                            ">
                                {{ ucfirst($user->subscription->subscription_type) }}
                            </span>
                        </p>
                    </div>
                </div>
                <h3 class="text-[#0e1b13] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Courses</h3>
                <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,0fr))] gap-3 p-4">
                    @foreach($videos as $video)
                    <div class="flex flex-col gap-3 pb-3">
                        <div
                            class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl cursor-pointer"
                            style="background-image: url('{{ $video->thumbnail_url }}');"
                            onclick="openVideo('{{ $video->video_url }}')"
                        ></div>
                        <div>
                            <p class="text-[#0e1b13] text-base font-medium leading-normal">{{ $video->title }}</p>
                            <p class="text-[#50956d] text-sm font-normal leading-normal">{{ $video->lessons_count }} Lessons</p>
                            <p class="text-[#50956d] text-sm font-normal leading-normal">Starts in {{ $video->starts_in_days }} days</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <footer class="footer bg-[#f8fbfa] border-t border-solid border-t-[#e8f3ec] py-4">
        <div class="container mx-auto px-4 sm:px-10">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <div class="flex items-center mb-4 sm:mb-0">
                    <img src="{{ asset('asset/images/logo4.jpg') }}" alt="Aligned Sovereignty Logo" class="h-8 w-auto">
                </div>
                <div class="copyright text-[#50956d] text-sm text-center sm:text-left">
                    Aligned Sovereignty 2024 © All Rights Reserved
                </div>
            </div>
        </div>
    </footer>
</div>

<script>
function openVideo(videoUrl) {
    const modal = document.createElement('div');
    modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4';
    
    const videoContainer = document.createElement('div');
    videoContainer.className = 'bg-white p-4 rounded-lg w-full max-w-[90vw] max-h-[90vh] flex flex-col';
    
    const video = document.createElement('video');
    video.src = videoUrl;
    video.controls = true;
    video.className = 'w-full h-auto max-h-[calc(90vh-100px)]';
    
    const closeButton = document.createElement('button');
    closeButton.textContent = 'Close';
    closeButton.className = 'mt-4 px-4 py-2 bg-[#50956d] text-white rounded hover:bg-[#40794f] self-end';
    closeButton.onclick = () => modal.remove();
    
    videoContainer.appendChild(video);
    videoContainer.appendChild(closeButton);
    modal.appendChild(videoContainer);
    document.body.appendChild(modal);
}

// Add this new code for the mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    menuToggle.addEventListener('click', function() {
        navMenu.classList.toggle('hidden');
    });
});
</script>

<style>
@media (max-width: 639px) {
    .layout-content-container {
        display: flex;
        flex-direction: column;
    }
    .zoom-classes {
        order: -1;
    }
}

@media (max-width: 759px) {
    header {
        align-items: center;
    }
    #navMenu {
        margin-top: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
    }
    #navMenu.hidden {
        display: none;
    }
    
    /* Footer styles for small screens */
    .footer .container > div {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .footer .copyright {
        margin-top: 0.5rem;
    }
}

.border-platinum {
    border-color: #E5E4E2;
}
.border-gold {
    border-color: #FFD700;
}
.border-silver {
    border-color: #C0C0C0;
}
.text-platinum {
    color: #E5E4E2;
}
.text-gold {
    color: #FFD700;
}
.text-silver {
    color: #C0C0C0;
}
</style>
</body>
</html>
