<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Qualcomm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFStepsNearInfinity extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:AFStepsNearInfinity';

    protected string $name = 'AFStepsNearInfinity';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'AF Steps Near Infinity',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 212771
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:AFStepsNearInfinity',
            'desc' => [
                'en' => 'AF Steps Near Infinity',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
