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
class TimingBiasCorrectionDescription extends AbstractTagGroup
{
    protected string $id = 'MXF:TimingBiasCorrectionDescription';

    protected string $name = 'TimingBiasCorrectionDescription';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Timing Bias Correction Description',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116433
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:TimingBiasCorrectionDescription',
            'desc' => [
                'en' => 'Timing Bias Correction Description',
            ],
        ],
    ];

    protected int $count = 0;
}
