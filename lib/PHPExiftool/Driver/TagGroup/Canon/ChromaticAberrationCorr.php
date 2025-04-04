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
class ChromaticAberrationCorr extends AbstractTagGroup
{
    protected string $id = 'Canon:ChromaticAberrationCorr';

    protected string $name = 'ChromaticAberrationCorr';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Chromatic Aberration Corr',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::VignettingCorr
             * line : 53074
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::VignettingCorr.Canon:ChromaticAberrationCorr',
            'desc' => [
                'en' => 'Chromatic Aberration Corr',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::VignettingCorr
             * line : 53085
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::VignettingCorr.Canon:ChromaticAberrationCorr',
            'desc' => [
                'en' => 'Chromatic Aberration Corr',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
