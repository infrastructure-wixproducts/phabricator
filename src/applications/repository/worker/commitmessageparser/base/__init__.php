<?php
/**
 * This file is automatically generated. Lint this module to rebuild it.
 * @generated
 */



phutil_require_module('arcanist', 'differential/constants/revisionstatus');
phutil_require_module('arcanist', 'parser/diff');

phutil_require_module('phabricator', 'applications/differential/constants/action');
phutil_require_module('phabricator', 'applications/differential/constants/lintstatus');
phutil_require_module('phabricator', 'applications/differential/constants/unitstatus');
phutil_require_module('phabricator', 'applications/differential/editor/comment');
phutil_require_module('phabricator', 'applications/differential/query/revision');
phutil_require_module('phabricator', 'applications/differential/storage/diff');
phutil_require_module('phabricator', 'applications/differential/storage/hunk');
phutil_require_module('phabricator', 'applications/differential/storage/revision');
phutil_require_module('phabricator', 'applications/diffusion/query/filecontent/base');
phutil_require_module('phabricator', 'applications/diffusion/query/parents/base');
phutil_require_module('phabricator', 'applications/diffusion/query/rawdiff/base');
phutil_require_module('phabricator', 'applications/diffusion/request/base');
phutil_require_module('phabricator', 'applications/files/storage/file');
phutil_require_module('phabricator', 'applications/repository/storage/arcanistproject');
phutil_require_module('phabricator', 'applications/repository/storage/commitdata');
phutil_require_module('phabricator', 'applications/repository/worker/base');
phutil_require_module('phabricator', 'infrastructure/env');
phutil_require_module('phabricator', 'storage/queryfx');

phutil_require_module('phutil', 'symbols');
phutil_require_module('phutil', 'utils');


phutil_require_source('PhabricatorRepositoryCommitMessageParserWorker.php');
