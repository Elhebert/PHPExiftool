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
class AlternateName extends AbstractTagGroup
{
    protected string $id = 'MXF:AlternateName';

    protected string $name = 'AlternateName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Alternate Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116943
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:AlternateName',
            'desc' => [
                'en' => 'Alternate Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116946
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:AlternateName',
            'desc' => [
                'en' => 'Alternate Name',
            ],
        ],
    ];

    protected int $count = 0;
}
