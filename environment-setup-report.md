# Environment setup report

## State

`LOCAL_READY`

The local Laravel environment is prepared and verified. External GitHub, CloudPanel, TLS, backup, and deployment checkpoints have not started.

## Selected profile

- Storage: PostgreSQL
- Application: Laravel 13.32.0
- PHP: 8.5.3
- Frontend: Blade and Vite
- Database: PostgreSQL 16.14 (Homebrew)
- Cache and queue: Redis 7.2.7
- Delivery model: immutable release archive, without Docker

## Local configuration

- Application database: `skill_v2_test`
- Test database: `skill_v2_test_testing`
- Database host: `127.0.0.1:5432`
- Browser gate: `/` and `/bitrix24/launch`
- Health endpoint: `/health`
- Git branches: `main` and `test`; routine development uses `test`

No passwords, OAuth tokens, private keys, or production credentials are recorded in this report.

## Files added or adapted

- Bitrix24 launch controller and verifier
- Bitrix24 gate and empty application views
- Bitrix24 routes and configuration
- Browser-gate feature tests
- PostgreSQL `.env.example`
- PostgreSQL PHPUnit configuration
- Internal non-secret `project-environment.json`
- `setup-required-inputs.md`

## Verification performed

- Composer dependencies installed without security advisories.
- Application and test PostgreSQL schemas migrated successfully.
- PostgreSQL read/write probe completed inside a rolled-back transaction.
- Redis returned `PONG`.
- Queue worker completed successfully with an empty queue.
- Scheduler command completed successfully.
- Laravel test suite: 7 passed, 21 assertions.
- Vite production build completed successfully.
- Secret scan passed.
- Direct `GET /` returned HTTP 200 and `Откройте приложение из Битрикс24`.
- Forged iframe/referrer headers did not grant access.
- Invalid `POST /bitrix24/launch` returned HTTP 403.
- `GET /health` returned HTTP 200 with `{"status":"ok"}`.

## External work not yet performed

- GitHub repository connection and branch protection
- CloudPanel test site and dedicated deploy user
- ED25519 deploy key and key-only SSH verification
- Managed test PostgreSQL connection
- Trusted TLS certificate verification
- GitHub Actions test deployment and rollback
- Daily backup artifact and isolated restore drill

The next checkpoint is the GitHub repository URL.
