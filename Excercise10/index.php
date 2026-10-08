<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>B-PIS Command Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg-color: #f8fafc;
      --card-bg: #ffffff;
      --text-main: #0f172a;
      --text-muted: #64748b;
      --primary: #2563eb;
      --primary-light: #eff6ff;
      --success-bg: #dcfce7;
      --success-text: #15803d;
      --error-bg: #fef2f2;
      --error-text: #b91c1c;
      --border: #e2e8f0;
      --shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05), 0 2px 4px -2px rgb(0 0 0 / 0.05);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--bg-color);
      color: var(--text-main);
      padding: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    /* Header Styling */
    header {
      margin-bottom: 2rem;
      border-bottom: 2px solid var(--border);
      padding-bottom: 1rem;
    }

    h1 {
      font-size: 1.875rem;
      font-weight: 700;
      color: var(--text-main);
    }

    h2 {
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 1rem;
      color: var(--text-main);
    }

    /* Summary Grid */
    .summary-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1rem;
      margin-bottom: 2.5rem;
    }

    .stat-card {
      background: var(--card-bg);
      padding: 1.25rem;
      border-radius: 12px;
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
    }

    .stat-card .label {
      font-size: 0.875rem;
      color: var(--text-muted);
      font-weight: 500;
      margin-bottom: 0.25rem;
    }

    .stat-card .value {
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--text-main);
    }

    .stat-card .sub-value {
      font-size: 0.875rem;
      color: var(--text-muted);
      margin-top: 0.25rem;
    }

    /* Main Content Sections */
    .dashboard-grid {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 1.5rem;
    }

    @media (max-width: 768px) {
      .dashboard-grid {
        grid-template-columns: 1fr;
      }
    }

    .panel {
      background: var(--card-bg);
      padding: 1.5rem;
      border-radius: 12px;
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
      margin-bottom: 1.5rem;
    }

    /* Validation Items */
    .validation-list {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 1rem;
    }

    .val-card {
      padding: 0.875rem 1rem;
      border-radius: 8px;
      border: 1px solid var(--border);
    }

    .val-card.valid {
      background-color: var(--success-bg);
      border-color: #bbf7d0;
      color: var(--success-text);
    }

    .val-card.invalid {
      background-color: var(--error-bg);
      border-color: #fecaca;
      color: var(--error-text);
    }

    .val-name {
      font-weight: 600;
      margin-bottom: 0.25rem;
    }

    .val-status {
      font-size: 0.85rem;
    }

    /* Profile List */
    .profile-list {
      list-style: none;
    }

    .profile-item {
      padding: 0.75rem 0;
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-weight: 500;
    }

    .profile-item:last-child {
      border-bottom: none;
    }

    .status-dot {
      width: 8px;
      height: 8px;
      background-color: #22c55e;
      border-radius: 50%;
    }

    /* Banner / Alerts */
    .alert-banner {
      background-color: #f0fdf4;
      border: 1px solid #bbf7d0;
      color: var(--success-text);
      padding: 1rem;
      border-radius: 8px;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
  </style>
</head>
<body>

  <header>
    <h1>B-PIS Command Dashboard</h1>
  </header>

  <!-- Summary Cards -->
  <section class="summary-grid">
    <div class="stat-card">
      <div class="label">Total Profiles</div>
      <div class="value">8</div>
    </div>
    <div class="stat-card">
      <div class="label">Active / Inactive</div>
      <div class="value" style="color: #16a34a;">6 <span style="font-size: 1rem; color: #dc2626;">/ 2</span></div>
    </div>
    <div class="stat-card">
      <div class="label">Average Age</div>
      <div class="value">50.75</div>
    </div>
    <div class="stat-card">
      <div class="label">Youngest / Oldest</div>
      <div class="sub-value"><strong>Youngest:</strong> Pema Dorji (24)</div>
      <div class="sub-value"><strong>Oldest:</strong> Sonam Choden (130)</div>
    </div>
  </section>

  <div class="dashboard-grid">
    <!-- Main Column: Validation Section -->
    <div>
      <div class="panel">
        <h2>Validation</h2>
        <div class="validation-list">
          <div class="val-card valid">
            <div class="val-name">Pema Dorji</div>
            <div class="val-status">Valid Profile</div>
          </div>
          <div class="val-card valid">
            <div class="val-name">Karma Wangchuk</div>
            <div class="val-status">Valid Profile</div>
          </div>
          <div class="val-card valid">
            <div class="val-name">Sonam Dorji</div>
            <div class="val-status">Valid Profile</div>
          </div>
          <div class="val-card valid">
            <div class="val-name">Tashi Dorji</div>
            <div class="val-status">Valid Profile</div>
          </div>
          <div class="val-card invalid">
            <div class="val-name">Unnamed</div>
            <div class="val-status">Missing name</div>
          </div>
          <div class="val-card invalid">
            <div class="val-name">Dechen Wangdi</div>
            <div class="val-status">Missing dzongkhag</div>
          </div>
          <div class="val-card valid">
            <div class="val-name">Karma Dorji</div>
            <div class="val-status">Valid Profile</div>
          </div>
          <div class="val-card invalid">
            <div class="val-name">Sonam Choden</div>
            <div class="val-status">Invalid age</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Sidebar Column: Active Profiles & Permission Check -->
    <div>
      <div class="panel">
        <h2>Thimphu Active Profiles</h2>
        <ul class="profile-list">
          <li class="profile-item"><span class="status-dot"></span> Pema Dorji</li>
          <li class="profile-item"><span class="status-dot"></span> Tashi Dorji</li>
          <li class="profile-item"><span class="status-dot"></span> Karma Dorji</li>
        </ul>
      </div>

      <div class="panel">
        <h2>Permission Check</h2>
        <div class="alert-banner">
          ✓ Permission granted.
        </div>
      </div>
    </div>
  </div>

</body>
</html>