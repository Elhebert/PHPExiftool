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
class Fade_InDuration extends AbstractTagGroup
{
    protected string $id = 'MXF:Fade-InDuration';

    protected string $name = 'Fade-InDuration';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Fade-In Duration',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116097
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:Fade-InDuration',
            'desc' => [
                'en' => 'Fade-In Duration',
            ],
        ],
    ];

    protected int $count = 0;
}
