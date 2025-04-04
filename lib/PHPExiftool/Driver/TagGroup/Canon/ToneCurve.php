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
class ToneCurve extends AbstractTagGroup
{
    protected string $id = 'Canon:ToneCurve';

    protected string $name = 'ToneCurve';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Tone Curve',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::Processing
             * line : 52372
             * type : int16s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::Processing.Canon:ToneCurve',
            'desc' => [
                'en' => 'Tone Curve',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
