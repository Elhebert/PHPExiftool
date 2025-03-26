<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PatternCorrectionGains extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:PatternCorrectionGains';

    protected string $name = 'PatternCorrectionGains';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Pattern Correction Gains',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106724
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:PatternCorrectionGains',
            'desc' => [
                'en' => 'Pattern Correction Gains',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 6;
}
