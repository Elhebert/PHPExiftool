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
class VerticalGraphicsSafePercentage extends AbstractTagGroup
{
    protected string $id = 'MXF:VerticalGraphicsSafePercentage';

    protected string $name = 'VerticalGraphicsSafePercentage';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Vertical Graphics Safe Percentage',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116532
             * type : float
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:VerticalGraphicsSafePercentage',
            'desc' => [
                'en' => 'Vertical Graphics Safe Percentage',
            ],
        ],
    ];

    protected int $count = 0;
}
