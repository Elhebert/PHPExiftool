<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BackgroundImageID extends AbstractTagGroup
{
    protected string $id = 'MNG:BackgroundImageID';

    protected string $name = 'BackgroundImageID';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::Background
             * line : 164498
             * type : int16u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::Background.MNG:BackgroundImageID',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
