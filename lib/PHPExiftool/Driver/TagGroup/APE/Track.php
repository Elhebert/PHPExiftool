<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\APE;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Track extends AbstractTagGroup
{
    protected string $id = 'APE:Track';

    protected string $name = 'Track';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : APE::Main
             * line : 324
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'APE::Main.APE:Track',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
