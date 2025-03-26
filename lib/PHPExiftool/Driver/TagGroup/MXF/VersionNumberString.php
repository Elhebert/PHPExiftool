<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VersionNumberString extends AbstractTagGroup
{
    protected string $id = 'MXF:VersionNumberString';

    protected string $name = 'VersionNumberString';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Version Number String',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115454
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:VersionNumberString',
            'desc' => [
                'en' => 'Version Number String',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 115457
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:VersionNumberString',
            'desc' => [
                'en' => 'Version Number String',
            ],
        ],
    ];

    protected int $count = 0;
}
