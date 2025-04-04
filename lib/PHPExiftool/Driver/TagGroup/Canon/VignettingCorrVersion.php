<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class VignettingCorrVersion extends AbstractTagGroup
{
    protected string $id = 'Canon:VignettingCorrVersion';

    protected string $name = 'VignettingCorrVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Vignetting Corr Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::VignettingCorr
             * line : 53049
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::VignettingCorr.Canon:VignettingCorrVersion',
            'desc' => [
                'en' => 'Vignetting Corr Version',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::VignettingCorrUnknown
             * line : 53149
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::VignettingCorrUnknown.Canon:VignettingCorrVersion',
            'desc' => [
                'en' => 'Vignetting Corr Version',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
