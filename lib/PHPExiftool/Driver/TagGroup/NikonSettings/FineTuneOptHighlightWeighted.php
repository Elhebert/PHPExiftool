<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\NikonSettings;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FineTuneOptHighlightWeighted extends AbstractTagGroup
{
    protected string $id = 'NikonSettings:FineTuneOptHighlightWeighted';

    protected string $name = 'FineTuneOptHighlightWeighted';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Fine Tune Opt Highlight Weighted',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : NikonSettings::Main
             * line : 166813
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'NikonSettings::Main.NikonSettings:FineTuneOptHighlightWeighted',
            'desc' => [
                'en' => 'Fine Tune Opt Highlight Weighted',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
