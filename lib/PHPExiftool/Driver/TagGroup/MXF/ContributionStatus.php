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
class ContributionStatus extends AbstractTagGroup
{
    protected string $id = 'MXF:ContributionStatus';

    protected string $name = 'ContributionStatus';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Contribution Status',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114150
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ContributionStatus',
            'desc' => [
                'en' => 'Contribution Status',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116340
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ContributionStatus',
            'desc' => [
                'en' => 'Contribution Status',
            ],
        ],
    ];

    protected int $count = 0;
}
