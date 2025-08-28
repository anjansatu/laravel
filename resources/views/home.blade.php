<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <style>
            :root {
                --bg1: #4f46e5; /* indigo-600 */
                --bg2: #ec4899; /* pink-500 */
                --bg3: #f59e0b; /* amber-500 */
            }
            * { box-sizing: border-box; }
            html, body { height: 100%; }
            body {
                margin: 0;
                font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji";
                color: #111827;
                background:
                    radial-gradient(1200px 600px at 10% -10%, rgba(236,72,153,0.25), transparent 50%),
                    radial-gradient(900px 500px at 110% 20%, rgba(79,70,229,0.30), transparent 50%),
                    linear-gradient(135deg, var(--bg1), var(--bg2) 50%, var(--bg3));
                background-attachment: fixed;
            }
            .wrap { min-height: 100%; display: flex; padding: 24px; align-items: center; justify-content: center; }
            .panel {
                position: relative;
                width: 100%; max-width: 1100px; min-height: 70vh;
                border-radius: 20px; padding: 1px;
                background: linear-gradient(135deg, rgba(255,255,255,0.75), rgba(255,255,255,0.25));
                box-shadow: 0 10px 30px rgba(0,0,0,0.15), inset 0 0 0 1px rgba(255,255,255,0.35);
            }
            .panel-inner {
                position: relative; border-radius: 20px; height: 100%; min-height: 70vh;
                backdrop-filter: blur(18px); -webkit-backdrop-filter: blur(18px);
                background: rgba(255,255,255,0.12);
                border: 1px solid rgba(255,255,255,0.25);
                display: flex; flex-direction: column; align-items: center; justify-content: center;
                overflow: hidden;
            }
            .blob { position: absolute; filter: blur(60px); opacity: 0.55; pointer-events: none; }
            .blob1 { width: 420px; height: 420px; left: -120px; top: -120px; background: radial-gradient(circle at 30% 30%, #a78bfa, transparent 60%); }
            .blob2 { width: 520px; height: 520px; right: -160px; bottom: -160px; background: radial-gradient(circle at 70% 70%, #fb7185, transparent 60%); }
            .avatar {
                width: 140px; height: 140px; border-radius: 9999px;
                background: conic-gradient(from 220deg, #fde68a, #f472b6, #8b5cf6, #fde68a);
                display: grid; place-items: center; color: white; font-weight: 700; font-size: 42px;
                border: 4px solid rgba(255,255,255,0.45);
                box-shadow: 0 10px 25px rgba(0,0,0,0.25);
            }
            .title { margin-top: 18px; font-size: 28px; font-weight: 700; letter-spacing: 0.2px; color: #111827; text-align: center; }
            .subtitle { margin-top: 4px; color: rgba(17,24,39,0.7); text-align: center; }
            .email { margin-top: 2px; color: rgba(17,24,39,0.65); font-size: 14px; text-align: center; }
            .actions { display: flex; gap: 12px; margin: 22px 0 32px; }
            .btn {
                appearance: none; border: none; cursor: pointer; border-radius: 9999px; font-size: 14px; font-weight: 600;
                padding: 10px 18px; transition: transform .06s ease, box-shadow .2s ease, background .2s ease;
                display: inline-flex; align-items: center; justify-content: center;
            }
            .btn-primary { background: #ffffff; color: #111827; box-shadow: 0 6px 16px rgba(0,0,0,0.12); }
            .btn-primary:hover { transform: translateY(-1px); }
            .btn-ghost { background: rgba(0,0,0,0.25); color: #fff; border: 1px solid rgba(255,255,255,0.35); }
            .btn-ghost:hover { transform: translateY(-1px); background: rgba(0,0,0,0.33); }
            .brand { position: absolute; top: 16px; left: 18px; color: rgba(17,24,39,0.8); font-weight: 600; font-size: 14px; }
            @media (max-width: 480px) {
                .avatar { width: 120px; height: 120px; font-size: 36px; }
                .title { font-size: 24px; }
            }
        </style>
    </head>
    <body>
        <div class="wrap">
            <div class="panel">
                <div class="panel-inner">
                    <div class="brand">{{ config('app.name', 'Laravel') }}</div>
                    <div class="blob blob1"></div>
                    <div class="blob blob2"></div>

                    <div class="avatar">A</div>
                    <div class="title">Admin User</div>
                    <div class="subtitle">Colorful Profile • Home</div>
                    <div class="email">admin@email.com</div>
                    <div class="actions">
                        <a class="btn btn-primary" href="#">Get Started</a>
                        <a class="btn btn-ghost" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

