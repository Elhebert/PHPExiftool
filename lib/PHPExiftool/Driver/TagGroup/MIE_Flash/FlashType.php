<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FlashType extends AbstractTagGroup
{
    protected string $id = 'MIE-Flash:FlashType';

    protected string $name = 'FlashType';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Flash Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIE::Flash
             * line : 111421
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'MIE::Flash.MIE-Flash:FlashType',
            'desc' => [
                'en' => 'Flash Type',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
