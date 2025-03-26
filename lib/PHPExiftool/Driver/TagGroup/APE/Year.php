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
class Year extends AbstractTagGroup
{
    protected string $id = 'APE:Year';

    protected string $name = 'Year';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Year',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : APE::Main
             * line : 149
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'APE::Main.APE:Year',
            'desc' => [
                'en' => 'Year',
            ],
        ],
    ];

    protected int $count = 0;
}
