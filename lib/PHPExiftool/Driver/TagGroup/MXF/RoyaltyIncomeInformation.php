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
class RoyaltyIncomeInformation extends AbstractTagGroup
{
    protected string $id = 'MXF:RoyaltyIncomeInformation';

    protected string $name = 'RoyaltyIncomeInformation';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Royalty Income Information',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114093
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:RoyaltyIncomeInformation',
            'desc' => [
                'en' => 'Royalty Income Information',
            ],
        ],
    ];

    protected int $count = 0;
}
