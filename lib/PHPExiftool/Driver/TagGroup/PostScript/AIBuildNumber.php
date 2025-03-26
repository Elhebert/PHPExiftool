<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PostScript;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AIBuildNumber extends AbstractTagGroup
{
    protected string $id = 'PostScript:AIBuildNumber';

    protected string $name = 'AIBuildNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PostScript::Main
             * line : 305873
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PostScript::Main.PostScript:AIBuildNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
