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
class NominationCategory extends AbstractTagGroup
{
    protected string $id = 'MXF:NominationCategory';

    protected string $name = 'NominationCategory';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Nomination Category',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118096
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:NominationCategory',
            'desc' => [
                'en' => 'Nomination Category',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 118099
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:NominationCategory',
            'desc' => [
                'en' => 'Nomination Category',
            ],
        ],
    ];

    protected int $count = 0;
}
