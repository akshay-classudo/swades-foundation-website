# Swades Foundation CMS Migration Status

Last audited: 26-Aug-2026

This status reflects the current PHP implementation in the repository. `Partial` means the CMS integration exists, but static fallbacks, legacy page structures, or mixed data access still remain.

## CMS Features

| Feature | Priority | Status | Notes |
| --- | --- | --- | --- |
| General Settings | High | Completed | Site settings and global contact/social configuration are read through the CMS helper. |
| Blogs | High | Completed | Blog listing and detail pages use CMS post data, including slug, image, date, and SEO context. |
| Team | High | Completed | Team members are loaded from CMS data; legacy fallback cards remain on the frontend. |
| Contact Form Submissions | High | Completed | Submission handling and CMS-side storage/listing are present. |
| Partners | Low | Completed | CMS helper support is present for partner/logo data. |
| Awards & Achievements | Low | Completed | Awards are loaded through the CMS helper; the frontend still has a fallback. |
| Impacts | Low | Completed | Impact statistics are loaded through the CMS helper. |
| Pages | Low | Completed | CMS page lookup, publishing checks, content, and sections are implemented. |
| Meta Title | Low | Completed | SEO context supports page and post titles. |
| Meta Description | Low | Completed | SEO context supports page and post descriptions. |
| Sitemap | High | Completed | `sitemap.php` generates XML from public CMS sitemap entries when enabled. |
| Robots.txt | High | Completed | `robots.php` renders CMS/site robots configuration and sitemap reference. |

## Frontend CMS Migration

| Feature / File | Priority | Status | What remains |
| --- | --- | --- | --- |
| `index.php` | High | Partial | Homepage CMS data is connected, but several story, work, and community card fallbacks remain static. |
| `about-us.php` | High | Partial | Page content and sections use CMS data, but the page still contains legacy static structure/fallback content. |
| `csr.php` | High | Completed | CMS page content, publishing checks, and configurable sections are connected. |
| `dreamvillage.php` | High | Partial | CMS page content is connected, but static sections and fallbacks remain. |
| `digital-media.php` | Medium | Partial | CMS media data is used, but static fallback cards remain. |
| `sse.php` | Medium | Partial | CMS page content and SSE documents are connected; legacy/static structure remains. |
| `privacy-policy.php` | Medium | Completed | CMS page content and SEO fields are connected. |
| `terms-conditions.php` | Medium | Completed | CMS page content and SEO fields are connected. |
| `refund-policy.php` | Medium | Completed | CMS page content and SEO fields are connected. |
| `posh-policy.php` | Medium | Completed | CMS page content and SEO fields are connected. |
| `robots.php` | High | Completed | Dynamic robots output is implemented; admin and public domains are kept separate by configuration. |
| `sitemap.php` | High | Completed | Dynamic sitemap output is implemented for public/indexable CMS entries. |
| Standalone story/article pages | Medium | Pending | Individual hard-coded story files still exist and need replacement with reusable CMS-driven routing. |
| `Donate.php` | High | Partial | Donation transaction flow remains intact and page content uses CMS data, but legacy/static content remains. |
| Frontend CMS helper | High | Completed | Shared CMS access and SEO helper functions are available in `include/cms.php`. |
| CMS API integration | High | Partial | Shared helper access is standardized, but most pages read local CMS data directly rather than consistently consuming the listed `/api/v1/...` endpoints. |
| SEO consistency | High | Completed | Shared SEO injection, canonical URLs, robots directives, and social metadata support are implemented. |

## Remaining Work

1. Remove static fallbacks from `index.php`, `about-us.php`, `dreamvillage.php`, `digital-media.php`, `sse.php`, and `Donate.php` after confirming equivalent CMS records exist.
2. Replace standalone story/article PHP files with one CMS-driven article route.
3. Decide whether the frontend contract should be local helper access or HTTP `/api/v1/...` calls, then apply that choice consistently.
4. Test public pages with empty, draft, and missing CMS records to confirm fallback and 404 behaviour.
5. Validate sitemap and robots output in production with the public domain and deployed CMS settings.

## CMS Usage Guide

### How the CMS works

1. Sign in to the Laravel CMS admin application.
2. Open the relevant CMS section and create or edit the record.
3. Save the record. The change is stored in the CMS database.
4. The public PHP website reads the saved record through `include/cms.php` or the CMS API.
5. Refresh the public page. Published/active records are rendered automatically; drafts and inactive records are not shown.

Images and documents uploaded through the CMS are served from the CMS storage URL. The frontend converts CMS asset paths through `cms_asset_url()`.

### What can be changed in the CMS

| CMS menu | Admin path | What it controls | Public result |
| --- | --- | --- | --- |
| Pages | `/cms/pages` | Page title, slug, status, content, sections, and page SEO fields | CMS-enabled pages such as About Us, CSR, Dream Village, policies, Impact, and Donate |
| Blog | `/cms/posts` | Blog title, slug, category, content, featured image, publish date, and SEO fields | `blogs.php` and `Blog-detail.php` |
| Media Coverage | `/cms/media-coverage` | Digital, print, and video media title, image, source, URL, embed URL, date, order, and active state | `digital-media.php`, `videos-media.php`, and related media sections |
| Campaigns | `/cms/campaigns` | Campaign records and campaign content | Campaign/API-backed sections where connected |
| Documents & Reports | `/cms/documents` | Uploaded reports and documents by category | SSE and document sections |
| Partners & Believers | `/cms/partners` and `/cms/believers` | Logos, names, links, type, order, and active state | Partner/believer logo sections |
| Impact Numbers | `/cms/impact-stats` | Impact number, title, description, icon/image, order, and visibility | Homepage and Impact sections |
| Awards & Recognition | `/cms/awards` | Award title, organization, year, description, image, order, and active state | Awards page/sections |
| Team | `/cms/team` | Name, designation/role, photo, bio, social links, order, and visibility | Team page and team sections |
| Contact Forms | `/cms/contacts` | Contact submissions, details, read/status handling, and notifications | Admin contact submission management |
| Media Library | `/media` | Uploaded images and files used by CMS records | Reusable CMS assets |
| General Settings | `/cms/settings/general` | Site name, logo, favicon, contact details, social links, email settings, and global values | Header, footer, contact information, and site-wide configuration |
| Homepage Settings | `/cms/settings/homepage` | Homepage-specific configurable settings | Homepage sections where the setting is connected |
| General SEO | `/seo/general` | Global SEO defaults and site-level SEO configuration | Shared SEO output |
| Sitemap | `/seo/sitemap` | Sitemap enablement and regeneration | Public `/sitemap.xml` |
| Robots.txt | `/seo/robots` | Robots rules and sitemap reference | Public `/robots.txt` |
| Social / Open Graph | `/seo/social` | Social sharing defaults and metadata | Social metadata on supported pages |

### How to update common content

#### Update a normal page

1. Open `/cms/pages`.
2. Select the page and choose Edit, or choose Create Page.
3. Update the title, content, sections, status, and SEO fields.
4. Set the status to `Published`.
5. Save and open the corresponding public page.

If a page is not published, `cms_require_published_page()` can return a not-found response instead of displaying it.

#### Update a blog

1. Open `/cms/posts`.
2. Create or edit the post.
3. Set a unique slug, featured image, category, content, publish date, meta title, and meta description.
4. Set the post status to `Published`.
5. Check the blog listing and the detail URL using the saved slug.

#### Update team, impact, award, partner, or media content

1. Open the matching CMS menu.
2. Edit the record or use the Add option.
3. Check the visibility/active setting and display order.
4. Save, then refresh the related public page.

The frontend only loads visible/active records for these sections. If no CMS records are available, some pages currently show legacy static fallback cards; removing those fallbacks is still pending migration work.

#### Update SEO, sitemap, or robots.txt

1. Set page/blog SEO fields from the record editor for page-specific metadata.
2. Use `/seo/general` for global defaults.
3. Use `/seo/sitemap` to confirm sitemap enablement and regenerate it when required.
4. Use `/seo/robots` to update robots rules and the sitemap URL.
5. Verify the public `/sitemap.xml` and `/robots.txt` URLs after saving.

### Current data flow

The frontend currently uses two supported data paths:

- Local CMS database helpers in `include/cms.php` for posts, team, media coverage, logos, documents, pages, and SEO-related page data.
- HTTP requests to `CMS_PUBLIC_URL . '/api/v1/'` for site settings, contact submissions, jobs, and selected API-backed data.

For example, `cms_get_posts()` reads published posts from the CMS database, while `cms_get_site_settings()` requests `/api/v1/site`. This mixed implementation is functional but should be standardized as part of the remaining CMS API integration work.

### If a CMS change is not visible

Check these items in order:

1. Confirm the record was saved successfully.
2. Confirm its status is `Published` or its active/visible flag is enabled.
3. Check that the slug is correct and unique.
4. Confirm the frontend is connected to the same CMS database/API environment.
5. Confirm uploaded image paths are valid CMS storage paths.
6. Refresh the browser and check the public page URL.
7. For SEO, sitemap, or robots changes, open the generated public file directly and check the CMS setting is enabled.
8. Check PHP/application logs if the CMS database or API request failed.

### Important current limitation

Changing content in the CMS only changes sections that are already CMS-connected. Static HTML in the pages marked `Partial`, and the standalone story/article files marked `Pending`, will not change until those migration tasks are completed.

## New Page Frontend Procedure

### Mode A: Generic CMS page

Use this mode when the new page can use the standard page layout: header, page title, rich content, footer, and SEO metadata.

1. In the CMS, open `/cms/pages` and choose Create Page.
2. Enter the page title. Use a short, lowercase, hyphen-separated slug, for example `rural-education`.
3. Add the page content in the Content field. The content may include headings, paragraphs, lists, links, and images.
4. Add a meta title and meta description.
5. Save initially as `Draft` for review. Change to `Published` only after approval.
6. The public URL is `/page/rural-education`.
7. Test the page on desktop and mobile, check all links and images, then confirm the SEO source in the browser.

The rewrite rule in `.htaccess` sends `/page/{slug}` to `page.php`. `page.php` then:

1. Reads the `slug` from the URL.
2. Calls `cms_get_page($slug)`.
3. Returns the 404 page if there is no published matching record.
4. Uses `cms_page_content()` to render the saved content.
5. Uses the page meta title and meta description in the HTML head.
6. Includes the shared header and footer.

No new PHP file is required for this generic page type.

### Mode B: Custom branded page

Use this mode when the page needs a special layout, hero section, cards, tabs, forms, donation logic, or other behavior that the generic page renderer does not provide.

1. Product/content owner defines the page slug, required sections, fields, images, links, and SEO values.
2. Developer connects the PHP template to `cms_get_page('{slug}')`.
3. Developer maps each dynamic area to a CMS field or a named content section.
4. Developer adds safe empty-state behavior and a published-state check with `cms_require_published_page('{slug}')` where appropriate.
5. Content owner creates or updates the matching CMS page record.
6. Developer tests the page with published, draft, empty, missing-image, and missing-record cases.
7. After approval, the content owner publishes the record and the page is verified at its public URL.

Creating a CMS record alone does not automatically redesign or replace an existing PHP template. A custom PHP page must explicitly read the CMS fields or sections before CMS changes can affect that part of the page.

## Page Content System

### Page record keys

Each CMS page is identified by a unique `slug`. The main page record currently contains:

| Key | Purpose | Required behavior |
| --- | --- | --- |
| `title` | Visible page heading | Required when creating a page |
| `slug` | Stable URL and lookup key | Keep unchanged after publishing unless a redirect is planned |
| `content` | Main HTML/content body | Rendered by the generic page template or parsed for custom sections |
| `status` | Publication state | Only `published` records are returned to the public frontend |
| `meta_title` | Page title for search/social defaults | Falls back to the page title when empty |
| `meta_description` | Search description | Falls back to shared defaults or an excerpt where supported |
| `meta_keywords` | Optional keywords | Used by shared SEO context when present |
| `og_title` | Open Graph title | Falls back to the meta/page title |
| `og_description` | Open Graph description | Falls back to the meta description |
| `og_image` | Open Graph image | Converted to the CMS storage URL |
| `canonical_url` | Preferred canonical URL | Falls back to the current public URL |
| `index` / `follow` | Search crawler directives | Control whether search engines may index/follow the page |

The current admin page form directly exposes title, slug, content, status, meta title, and meta description. The additional SEO keys are supported by the frontend/API and may require the relevant SEO editor or a future form enhancement.

### Named content sections

For a custom template, multiple editable areas can be stored inside the single `content` field using section markers:

```html
<!-- cms-section:hero_title -->
<h1>Community-led change</h1>
<!-- /cms-section:hero_title -->

<!-- cms-section:hero_text -->
<p>Supporting content managed by the CMS.</p>
<!-- /cms-section:hero_text -->
```

The PHP template reads a section by key:

```php
$page = cms_get_page('example-page');
$heroTitle = cms_page_section($page, 'hero_title', 'Default heading');
$heroText = cms_page_section($page, 'hero_text', 'Default description');
```

The `cms_page_section()` helper returns the content between the matching markers. If the marker or its content is missing, it returns the supplied fallback. This makes it possible to publish a page safely while content is being prepared, but the fallback is still static content and should be removed once the CMS section is fully required.

### Recommended section-key convention

Use stable, descriptive keys in lowercase snake case:

| Section key | Example use |
| --- | --- |
| `hero_title` | Main hero heading |
| `hero_text` | Main hero description |
| `intro` | Introductory rich text |
| `impact_stats` | Impact number area |
| `program_cards` | Program/card content |
| `stories` | Story or article list |
| `cta` | Call-to-action content |
| `seo` | SEO-only content if a custom template requires it |

Section keys are an internal contract between the CMS content editor and the PHP template. A key must not be renamed casually: changing it in the CMS without changing the PHP template causes the template to use its fallback.

### Internal change workflow

For every new or migrated page, use this handoff:

1. Define the public URL and confirm the slug is unique.
2. List every page area that must be editable from CMS.
3. Decide whether the page is Generic or Custom.
4. For Custom pages, document the section keys and expected HTML for each key.
5. Connect the PHP template to the page record and section keys.
6. Create the CMS record as Draft.
7. Add content, images, links, and SEO values in the CMS.
8. Preview and test the page with both populated and empty sections.
9. Publish the record after content approval.
10. Verify the public URL, canonical URL, robots behavior, sitemap inclusion, mobile layout, and image loading.

### Example change lifecycle

When an editor changes `hero_title` in the CMS, the new value is saved in the page content. On the next request, the frontend loads the published page, `cms_page_section()` extracts the new `hero_title` block, and the PHP template prints it in the hero. No PHP deployment is needed for a content-only change. A PHP deployment is required when adding a new section key, changing the page layout, or replacing static fallback behavior.
